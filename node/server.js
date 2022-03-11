/* CREATE SERVER */

const http = require('http');
const morgan = require('morgan');

const hostname = '127.0.0.1';
const port = 3000;

/* Request - Solicitação/Requisição do Cliente */
/* Response - Resposta do servidor */
const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/plain');
  res.write(`Server running at http://${hostname}:${port}/`)
  res.end();
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`, morgan());
});

morgan(function (tokens, req, res) {
    return [
      tokens.method(req, res),
      tokens.url(req, res),
      tokens.status(req, res),
      tokens.res(req, res, 'content-length'), '-',
      tokens['response-time'](req, res), 'ms'
    ].join(' ')
})