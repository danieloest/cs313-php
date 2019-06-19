var http = require('http');
var url = require('url');


http.createServer(function onRequest(req, res) {
    if (req.url == "/home") {
        console.log("Hello World!");
        res.writeHead(200, {'Content-Type': 'text/html'});
        res.write("<h1 style=\"text-align: center\">Welcome to the Home Page</h1>");
        res.end();
    }
    else if (req.url == "/getData") {
        res.writeHead(200, {"Content-Type": "application/json"});
        var data = {
            class: "CS313",
            name: "Daniel Oestreicher",
        };
        res.write(JSON.stringify(data));
        res.end();

    }
    else {
        console.log("Page not found");
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.write("<h1 style=\"text-align: center\">Page Not Found</h1>");
        res.end();

    } 
}).listen(8888);