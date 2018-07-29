const { Client } = require("pg");
var database = {};
database.add = function(param, data) {
  /*
  const client = new Client({
    connectionString: process.env.DATABASE_URL,
    ssl: true
  });

  client.connect();

  client.query(
    "SELECT table_schema,table_name FROM information_schema.tables;",
    (err, res) => {
      if (err) throw err;
      for (let row of res.rows) {
        return JSON.stringify(row);
        console.log(JSON.stringify(row));
      }
      client.end();
    }
  );
  */

  var out = [
    { status: "OK" },
    { message: "Objeto agregado exitosamente a la base de datos" }
  ];
  return out;
};

module.exports = database;
