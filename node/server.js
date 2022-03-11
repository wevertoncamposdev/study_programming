/* CREATE SERVER */

const http = require('http');
const morgan = require('morgan');
var logger = morgan('combined')

const hostname = '127.0.0.1';
const port = 3000;

/* Request - Solicitação/Requisição do Cliente */
/* Response - Resposta do servidor */
const server = http.createServer((req, res) => {
    logger(req, res, function (err) {
        if (err) return done(err)
        res.statusCode = 200;
        res.setHeader('Content-Type', 'text/plain');
        res.write(`Server running at http://${hostname}:${port}/`)
        res.end();
    });
});


server.listen(port, hostname, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});