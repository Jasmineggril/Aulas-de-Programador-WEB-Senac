<?php
session_start();
include_once('database.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_NUMBER_FLOAT);
$datadeentrada = filter_input(INPUT_POST, 'datadeentrada', FILTER_SANITIZE_STRING);


if (!$id || !$nome || !$cargo || !$salario || !$datadeentrada) {
    $_SESSION['msg'] = "<p style='color:red;'>Preencha todos os campos corretamente.</p>";
    header("Location: create.php");
    exit();
}


$create_user = "INSERT INTO usuarios (nome, cargo, salario, datadeentrada) VALUES ('$nome', '$cargo', '$salario', NOW())";
$create_user_result = mysqli_query($conn, $create_user);

if ($create_user_result) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso.</p>";
    header("Location: create.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso.</p>";
    header("Location: create.php");
}
?>

