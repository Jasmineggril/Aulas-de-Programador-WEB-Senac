<?php
session_start();
include_once('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $datadeentrada = $_POST['datadeentrada'];

    $sql = "INSERT INTO formulario (nome, cargo, salario, datadeentrada) VALUES ('$nome', '$cargo', '$salario', '$datadeentrada')";
    
    if ($conn->query($sql) === TRUE) {
        $_SESSION['msg'] = "Funcionário cadastrado com sucesso!";
    } else {
        $_SESSION['msg'] = "Erro ao cadastrar funcionário: " . $conn->error;
    }
    
    $conn->close();
    header("Location: index.php");
}
?>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: auto;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"],
        button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }

        .pagination {
            text-align: center;
            margin-top: 20px;
        }

        .pagination a {
            margin: 0 5px;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ccc;
            color: #333;
        }

        .pagination a:hover {
            background-color: #ddd;
        }
    </style>

</styl>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Criar Funcionário</title>
</head>

<body>
    <h1>REGISTRAR FUNCIONÁRIO</h1>
    <form action="create.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>
        <label for="cargo">Cargo:</label>
        <input type="text" name="cargo" required><br>
        <label for="salario">Salário:</label>
        <input type="number" name="salario" required><br>
        <label for="datadeentrada">Data de Entrada:</label>
        <input type="date" name="datadeentrada" required><br>
        <input type="submit" value="Cadastrar">
    </form>

    <a href="listar.php"><button>LISTAR</button></a>

</body>

</html>



