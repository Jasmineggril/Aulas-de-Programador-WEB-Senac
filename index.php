<?php
include 'database.php';


$sql = "SELECT id, name, position, salary, created_at FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>EMPRESAS</h1>
    <h2>Lista de Funcionários</h2>
    <a href="create.php">Adicionar Novo Funcionário</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Salário</th>
            <th>Data de Entrada</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["position"]. "</td>
                        <td>" . $row["salary"]. "</td>
                        <td>" . $row["entrydate"]. "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
        }
        ?>
    </table>
</body>
</html>
