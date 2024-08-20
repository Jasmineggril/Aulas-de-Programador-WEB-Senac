<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $cpf = htmlspecialchars($_POST['cpf']);
    $dob = htmlspecialchars($_POST['datadenascimento']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);
    $password = htmlspecialchars($_POST['password']);

    
    echo "Nome: " . $nome . "<br>";
    echo "Nome do Usuário: " . $username . "<br>";
    echo "E-mail: " . $email . "<br>";
    echo "CPF: " . $cpf . "<br>";
    echo "Data de Nascimento: " . $dob . "<br>";
    echo "Sexo: " . $gender . "<br>";
    echo "Endereço: " . $address . "<br>";
    echo "Senha: " . $password . "<br>";
}
?>
