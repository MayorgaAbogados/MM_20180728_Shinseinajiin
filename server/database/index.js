const { Client } = require("pg");

var add = function(param, data) {
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
};

module.exports = database;
