var fs = require('fs');

/*module.exports = fs.readdir(path, extension, function callback(err, list) {
    if (err)
        return err;
    let files = "";
    for (var i = 0; i < list.length; i++) {
        if (list[i].includes("." + extension))
            files += list[i] + "\n";
    }
    return files;
});*/

module.exports = function read (path, extension, callback) {
    fs.readdir(path, (err, list) => {
        if (err)
            return callback(err);
        let files = new Array();
        for (var i = 0; i < list.length; i++) {
            if (list[i].includes("." + extension))
                files.push(list[i]);
        }
        return callback(err, files);
    });
}
