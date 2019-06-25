const connectionString = process.env.DATABASE_URL || "postgres://klxbktpjhcbjof:029fbe018a1261fd389b5374bc0a3c6d1f5d076eeaca21268261cd21abd5899a@ec2-54-243-208-234.compute-1.amazonaws.com:5432/dfhclv59av6q99?ssl=true";

const { Pool } = require('pg')
const pool = new Pool({connectionString: connectionString});

var sql = "SELECT * test";

pool.query(sql, function(err, result) {
    // If an error occurred...
    if (err) {
        console.log("Error in query: ")
        console.log(err);
    }

    // Log this to the console for debugging purposes.
    console.log("Back from DB with result:");
    console.log(result.rows);


});     