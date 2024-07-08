<?php
include_once('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO formulario (nome, cargo, salario, datadeentrada) VALUES ('$nome', '$position', '$salary', NOW())";
    if ($conn->query($sql) === TRUE) {
        echo "Novo registro criado com sucesso";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Criar / Listar PHP</title>
</head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #5be4eeda;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        #resultado {
            margin-top: 20px;
            font-size: 1.2em;
            text-align: center;
        }

    </style>
<body>
    <h1>RESGISTRE O FUNCIONÁRIO</h1>

    <form method="post" action="create.php">
        <label for="name">Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label for="position">Cargo:</label>
        <input type="text" name="position" required><br><br>
        <label for="salary">Salário:</label>
        <input type="text" name="salary" required><br><br>
        <label for="DATADEENTRA">DATA DE ENTRADA</label>
        <input type="text" name="dataentrada" required><br><br>
        <input type="submit" value="REGISTRAR">
    </form>
</body>
</html>

