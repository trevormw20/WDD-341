var http = require('http');
var fs = require('fs');


var jsonParsed = undefined;

fs.readFile('getData.json', handleFile);

function handleFile(err, data) {
    var jsonData = data;
    jsonParsed = JSON.parse(jsonData);
    console.log(jsonParsed);
}

http.createServer(function (req, res) {
    if (req.url == '/home') {
        res.writeHead(200, { "Content-Type": "application/json" });
        res.writeHead(404, { "Content-Type": "text/html" });
        res.write("<h1>Hello World</h1>");
    }

    if (req.url == '/getData') {
        String(jsonParsed);
        res.write(JSON.stringify(jsonParsed));
    }

    else {
        res.write("<h1>wrong path");
    }


    res.end();
}).listen(8888);








