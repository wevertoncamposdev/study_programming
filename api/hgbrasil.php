<!-- https://api.hgbrasil.com/geoip?key=685e44cb&address=remote&precision=false -->

<?php

/* iniciar autoload */
require './vendor/autoload.php';

/* iniciar variaveis de ambiente */
$dotenv = Dotenv\Dotenv::createImmutable ('./');
$dotenv->load();


HG_API();
function HG_API(){

    $url = "https://api.hgbrasil.com/geoip?key=".$_ENV['HG_API_TOKEN']."&address=remote&precision=false";
    $ch = curl_init($url);
    $result = curl_exec($ch);
   
    print($result) ;
  
}   


?>