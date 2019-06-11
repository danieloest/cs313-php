var reader = require('./module.js');
// var fs = require('fs');
let path = process.argv[2];
let extension = process.argv[3];

console.log(reader(path, extension, display));

function display(error, data)
{
    if (error != null)
        console.log(error);
    else
    {
        for (var i = 0; i < data.length; i++)
        {
            console.log(data[i]);
        }
    }
}