var fs = require('fs');


function readFile(callback) {
    var path = process.argv[2];
    let buffer = fs.readFile(path, function doneReading(err, fileContents) {
        if (err)
            return console.log(err);
        callback(fileContents);
    });
}

function countLines(data) {
        let bufferStringArray = data.toString().split("\n");
        console.log(bufferStringArray.length - 1);
}

readFile(countLines);