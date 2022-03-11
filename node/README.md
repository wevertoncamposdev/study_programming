# Estudo de Linguagem de Programação: NodeJS 
###### Autor: Weverton Campos

![NodeJS](https://img.icons8.com/color/120/000000/nodejs.png)


## Protocolo HTTP : [HTTP MDN ](https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Overview)

> HTTP é um protocolo (protocol) que permite a obtenção de recursos, como documentos HTML. É a base de qualquer troca de dados na Web e um protocolo cliente-servidor, o que significa que as requisições são iniciadas pelo destinatário, geralmente um navegador da Web. Um documento completo é reconstruído a partir dos diferentes sub-documentos obtidos, como por exemplo texto, descrição do layout, imagens, vídeos, scripts e muito mais.


<br>
<br>

~~~javascript
/* CREATE SERVER */

const http = require('http');
const hostname = '127.0.0.1';
const port = 3000;

/* 
    req - requisitions are requests made by the customer
    res - responses, are the responses that the server delivers to the client 
*/

const server = http.createServer((req, res) => {
  res.statusCode = 200; // https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Status
  res.setHeader('Content-Type', 'text/plain'); // Header
  res.end('Hello World'); // response
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});

~~~

<br>
<br>

>### Autenticação
>Algumas páginas podem ser protegidas para que apenas usuários específicos possam acessá-la. Autenticação básica pode ser fornecida pelo HTTP, usando tanto o cabeçalho WWW-Authenticate e similares, quanto configurando uma sessão específica usando cookies HTTP.

>### Proxy e tunelamento
>Servidores e/ou clientes estão frequentemente localizados em intranets e escondem seu verdadeiro endereço IP aos outros. Requisições HTTP recorrem aos proxies para contornar essa barreira na rede. Mas nem todos os proxies são proxies HTTP. O protocolo SOCKS, por exemplo, opera em um nível mais baixo. Outros protocolos, como ftp, podem ser tratados por esses proxies.

>### Sessões
>Usando os cookies HTTP, permite você vincular requisições com o estado do servidor. Isso cria as sessões, apesar do protocolo HTTP básico não manter estado. Isso é útil não só para os carrinhos de compras de e-commerces, mas também para qualquer site que permita customização das respostas a nível de usuário.


<br>
<br>
<br>

## Database MySQLs

>Conexão e consultas com banco de dados

~~~javascript
/* 
    dotenv; mysql
*/

const mysql = require('mysql');
require('dotenv/config');

var connection = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_DATABASE
});

connection.connect(function (err) {
    if (err) {
        console.error('error connecting: ' + err.stack);
        return;
    }
    console.log('connected as id ' + connection.threadId);
});
 
connection.query('SELECT * FROM heroku_ad279c73e8320b2.analise WHERE numero = 01', function (error, results, fields) {
    
    if (error) throw error;
  
  console.log(results[0].porcentagem);
  
  connection.end(
    function (err) {
        if (err) {
            console.error('error connecting: ' + err.stack);
            return;
        }
        console.log('connection closed! ');
    });
});

~~~

>*   Realizando conexão com banco de dados em nuvem, usando o CleaDB do Heroku com NodeJs usando o modulo mysql
>*   Usando variaveis de ambiente com o modulo dotenv

<br><hr><br>