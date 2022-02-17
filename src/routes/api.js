const express = require('express');
const router = express.Router();

const con = require('../base');
router.get('/', (req, res) => {
    con.query('select * from kit', (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});

router.get('/kit_por_programa/:prg', (req, res) => {
    const { prg } = req.params;
    con.query('select cod_item_fam, nom_item_fam, nivel, tipo_bien, tipo_calculo, meta, sub_finalidad, clasificador from kit where cod_programa=? order by cod_meta, sub_finalidad', [prg], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});


router.get('/programas', (req, res) => {
    con.query('select distinct(cod_programa) as cod_programa, programa from kit order by cod_programa', (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});

router.get('/metas/:prg', (req, res) => {
    const { prg } = req.params;
    con.query('select distinct(cod_meta) as cod_meta, meta from kit where cod_programa=? order by cod_meta', [prg], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});

router.get('/metas', (req, res) => {
    con.query('select distinct(cod_meta) as cod_meta, meta from kit order by cod_meta', (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});


router.get('/clasif/:met', (req, res) => {
    const { met } = req.params;
    con.query('select distinct(cod_clasificador), clasificador from kit where cod_meta=?', [met], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});

router.get('/tareas/:prg/:met', (req, res) => {
    const { prg, met } = req.params;
    con.query('select distinct(cod_subfin) as cod_tarea, sub_finalidad as tarea from kit where cod_programa=? and cod_meta=? order by cod_subfin', [prg, met], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});


router.get('/kit_por_meta/:prg/:met', (req, res) => {
    const { prg, met } = req.params;
    con.query('select cod_item_fam, nom_item_fam, nivel, tipo_bien, tipo_calculo, sub_finalidad, clasificador from kit where cod_programa=? and cod_meta=? order by sub_finalidad, nom_item_fam', [prg, met], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});

router.get('/kit_clasif/:clf', (req, res) => {
    const { clf } = req.params;
    con.query('select cod_item_fam, nom_item_fam, nivel, tipo_bien, tipo_calculo, sub_finalidad, clasificador from kit where cod_clasificador=? order by sub_finalidad, nom_item_fam', [clf], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});


router.get('/kit_por_tarea/:prg/:met/:tar', (req, res) => {
    const { prg, met, tar } = req.params;
    con.query('select cod_item_fam, nom_item_fam, nivel, tipo_bien, tipo_calculo, sub_finalidad, clasificador from kit where cod_programa=? and cod_meta=? and cod_subfin=? order by sub_finalidad, nom_item_fam', [prg, met, tar], (err, rows, fields) => {
        if (!err) {
            res.json(rows);
        } else {
            console.log(err);
        }
    });
});


module.exports = router;