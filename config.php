<?php


$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'aula_formulario';

$conn = new mysqli($server, $usuario, $senha, $banco);

if($conn->connect_error){
    die("Falha ao se comunicar com banco de dados".$conn->connect_error);
}

?>