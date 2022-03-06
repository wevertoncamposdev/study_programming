# Estudo de Linguagem de Programação: PHP
###### Autor: Weverton Campos


### Código
<hr>
<br>

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
