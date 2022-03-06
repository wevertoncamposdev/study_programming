# Estudo de Linguagem de Programação: NodeJS
###### Autor: Weverton Campos


### Código
<hr>
<br>

![NodeJS](https://img.icons8.com/color/48/000000/nodejs.png)
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
