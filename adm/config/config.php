<?php
if(!isset($seg)){
    exit;
}
$url_host = filter_input(INPUT_SERVER, 'HTTP_HOST');
//define('pg', "https://planbwebapps.com.br/lifuca/adm");
//define('pgsite', "http://$url_host/liga/celke");
//define('pg', "http://menu_dominio.com.br/celke/adm");
define('pg', "https://www.lifuca.com.br/adm");