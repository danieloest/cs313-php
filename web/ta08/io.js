var fs = require('fs');


function readFile(callback) {
    var path = process.argv[2];
    let buffer = fs.readFile(path);
    callback(buffer);
}

function countLines(err, data) {
    let bufferStringArray = data.toString().split("\n");
    console.log(bufferStringArray.length - 1);
}