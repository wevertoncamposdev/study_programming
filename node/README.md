# Estudo de Linguagem de Programação: NodeJS
###### Autor: Weverton Campos


### Código
<hr>
<br>

![NodeJS](https://img.icons8.com/color/48/000000/nodejs.png)

## Protocolo HTTP

> HTTP é um protocolo (protocol) que permite a obtenção de recursos, como documentos HTML. É a base de qualquer troca de dados na Web e um protocolo cliente-servidor, o que significa que as requisições são iniciadas pelo destinatário, geralmente um navegador da Web. Um documento completo é reconstruído a partir dos diferentes sub-documentos obtidos, como por exemplo texto, descrição do layout, imagens, vídeos, scripts e muito mais.

[HTTP MDN ](https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Overview)
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
  res.setHeader('Content-Type', 'text/plain');
  res.end('Hello World');
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});

~~~




>### Proxies (ou representantes)
>Entre o navegador Web e o servidor, vários computadores e máquinas transmitem as mensagens HTTP. Devido a estrutura em camadas da pilha Web, a maioria dessas máquinas operam em alguma das camadas: de transporte, de rede ou física, sendo transparente na camada da aplicação HTTP, e potencialmente exercendo um grande impacto na performance. Essas máquinas que operam na camada de aplicação são normalmente conhecidas como proxies (ou representantes, ou procuradores, etc). Eles podem ser transparentes ou não (alterações nas requisições não passam por eles), e podem desempenhar várias funções:

>cacheamento (o cache pode ser público ou privado, como o cache dos navegadores)
filtragem (como um scanner de antivírus, controle de acesso, etc)
balanceamento de carga (para permitir que vários servidores possam responder a diferentes requisições)
autenticação (para controlar quem tem acesso aos recursos)
autorização (para controlar quem tem acesso a determinada informação)
registro de informação (permite o armazenamento de informações de histórico)



<br>
<br>
<br>

## Database MySQLs

>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

~~~javascript
/* Install dotenv; mysql
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