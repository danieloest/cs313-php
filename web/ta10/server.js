require('dotenv').config();
const express = require('express')
const path = require('path')
const PORT = process.env.PORT || 5000
const connectionString = process.env.DATABASE_URL;


const { Pool } = require('pg');
const pool = new Pool({connectionString: connectionString});

var sql = "SELECT * FROM person";

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

express()
.get('/getPerson', (req, res) => {
    console.log("In get person :)");
    let id = parseInt(req.query.id);
    console.log("Id is: " + id);
    pool.query('SELECT * FROM person WHERE id = $1', [id], (err, qres) => {
        if (err) {
            throw err
        }
        console.log('person:', qres.rows[0])
        let response = JSON.stringify(qres.rows[0])
        console.log("JSON RESPONSE:", response)
        res.send(response)
    });
})
.listen(PORT, () => console.log(`Listening on ${ PORT }`))
