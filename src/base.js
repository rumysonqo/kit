const mysql = require('mysql2');

const con = mysql.createConnection({
    host: 'localhost',
    user: 'abel',
    password: 'axl',
    database: 'siga'
});

con.connect(function(err) {
    if (err) {
        console.log(err);
        return;
    } else {
        console.log('la bd esta conectada');
    }
});

module.exports = con;