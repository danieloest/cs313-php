var fs = require('fs');
// console.log(process.argv);
let path = process.argv[2];
let extension = process.argv[3];

fs.readdir(path, function callback(err, list) {
    for (var i = 0; i < list.length; i++) {
        if (list[i].includes("." + extension))
        console.log(list[i]);
    }
});