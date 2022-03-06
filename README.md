# Estudo de Linguagem de Programação
###### Autor: Weverton Campos




![API](https://img.icons8.com/cotton/48/000000/api.png)
![json](https://img.icons8.com/ios/50/000000/json.png) 

<!-- ![C](https://img.icons8.com/color/48/000000/c-programming.png)
![Arduino](https://img.icons8.com/fluency/50/000000/arduino.png)
-->

### Código
<hr>
<br>

[JavaScript](https://github.com/wevertoncamposdev/study_programming/tree/main/javascript)

![JavaScript](https://img.icons8.com/color/50/000000/javascript--v1.png)
~~~javascript
var v = "variable"
~~~

>*   Práticas com JavaScript

<br><hr><br>

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

![PHP](https://img.icons8.com/offices/50/000000/php-logo.png)
~~~php
<?php
    /* iniciar autoload */
require './vendor/autoload.php';

/* iniciar variaveis de ambiente */
$dotenv = Dotenv\Dotenv::createImmutable('./');

/* conectar as variaveis de ambiente */
$dotenv->load();

/* Conectar ao Banco de Dados */
$conn = connect_db_mysqli();

/* Finalizar conexão com o banco de dados */
$conn->close();

/* finalizar conexão com as variaveis de ambiente */
$dotenv->safeLoad();

function connect_db_mysqli()
{

        //Dados do banco de dados
        $user = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'] ;
        $db =  $_ENV['DATABASE'];
        $hostname =  $_ENV['DB_HOST'];
    
        //Conectando ao banco de dados
        $conn = mysqli_connect($hostname, $user, $password, $db);
        if (mysqli_connect($hostname, $user, $password, $db)) {
            echo "database successfully connected!";
        } else {
            echo "database connection error!";
        }
        
        
        return $conn;
}
?>
~~~

>*   Realizando conexão com banco de dados em nuvem, usando o CleaDB do Heroku com PHP usando o modulo mysql
>*   Usando variaveis de ambiente com o modulo dotenv

<br><hr><br>

![Python](https://img.icons8.com/color/50/000000/python--v1.png)
~~~python

""" 
python -m pip install mysql-connector-python
python -m pip install python-dotenv
 """
import mysql.connector
import os
from os.path import join, dirname
from dotenv import load_dotenv

dotenv_path = join(dirname(__file__), '.env')
load_dotenv(dotenv_path)

""" connectando ao banco de dados """
mydb = mysql.connector.connect(
  host= os.environ.get("DB_HOST"),
  user= os.environ.get("DB_USER"),
  password= os.environ.get("DB_PASSWORD"),
  database= os.environ.get("DATABASE")
)

print(mydb)

""" Consultando tabelas """
mycursor = mydb.cursor()
mycursor.execute("SHOW TABLES")
for x in mycursor:
    print(x)


~~~

>*   Realizando conexão com banco de dados em nuvem, usando o CleaDB do Heroku com Python usando o modulo mysql
>*   Usando variaveis de ambiente com o modulo dotenv


<br><hr><br>


![MySQL](https://img.icons8.com/fluency/50/000000/mysql-logo.png)
~~~sql
SELECT * FROM "variable" WHERE table = "variable";
~~~

>*   Consultas com MySQL
<hr>
<br><br><br>



>   ### Analisando a sintaxe dessas liguagens para realizar conexão com banco de dados usando variaveis de ambiente,
>* **Python** é muito mais ágil para realizar conexão e consultas MySQL
>* **Nodejs** é mais simples para implantar e utilizar o modulo dotnet, fácil para conectar ao banco de dados, tem mais recursos para tratar callback, porém para consultas MySQl não é tão ágil.
>* **PHP** para configura dotnet é mais complexo com o detalhe do autoload.php, para realizar conexão com o banco de dados é simples, para realizar consultas é tranquilo, porém existe demora no retorno das querys.

