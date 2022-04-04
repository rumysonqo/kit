const mysql = require('mysql2');

/*
const con = mysql.createPool({
    connectionLimit: 10,
    host: process.env.MYSQL_HOST || "localhost",
    user: process.env.MYSQL_USER || "root",
    password: process.env.MYSQL_PASSWORD || "axl",
    database: process.env.MYSQL_DATABASE || "siga",
  });
*/
const con = mysql.createConnection({
    host: 'localhost',
    user: 'abel',
    password: 'Indira2475',
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