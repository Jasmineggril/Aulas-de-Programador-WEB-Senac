<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

//echo "Nome: $nome <br>";
//echo "Email: $email <br>";

$created_user = "INSERT INTO usuários (nome, email, created) VALUES ('$nome', '$email', NOW())";
$created_user = mysqli_query($conn, $created_user);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "USUÁRIO CADASTRADO COM SUCESSO!"; 
    header("Location: cadastro.php");
} else {
    header("Location: cadastro.php");
}

