<?php

include_once('conexao.php');

$servidor = "localhost";
$usuario = "root";
$senha ="";
$dbname = "jasmine";

//Criar conexão
$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);
