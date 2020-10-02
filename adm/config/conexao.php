<?php
if(!isset($seg)){
    exit;
}
$servidor = "localhost";
$usuario = "lifucaco_lifuca";
$senha = "foxlima1976";
$dbname = "lifucaco_lifuca";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}/*else{
    echo "Conexao realizada com sucesso";
}*/