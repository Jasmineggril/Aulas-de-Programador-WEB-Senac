<?php
session_start();
include_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Listar</title>
</head>

<body>
    <h1>Listar Usuários</h1>
    <?php
   
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }


    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    $qnt_result_pg = 2;
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;


    $select_user = "SELECT * FROM formulario LIMIT $inicio, $qnt_result_pg";
    $selected_user = mysqli_query($conn, $select_user);


    $result_pg = "SELECT COUNT(id) as num_result FROM formulario";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);


    while ($row_user = mysqli_fetch_assoc($selected_user)) {
        echo "ID: " . ($row_user['id']) . "<br>";
        echo "Nome: " . ($row_user['nome']) . "<br>";
        echo "Cargo: " .($row_user['cargo']) . "<br>";
        echo "Salário: " . ($row_user['salario']) . "<br>";
        echo "Data de entrada: " . ($row_user['datadeentrada']) . "<br><br>";
    }

 
    $max_links = 2;
    echo "<a href='listar.php?pagina=1'>Primeira</a> ";

    for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if ($pag_ant >= 1) {
            echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
        }
    }

    echo "$pagina ";

    for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if ($pag_dep <= $quantidade_pg) {
            echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a> ";
        }
    }

    echo "<a href='listar.php?pagina=$quantidade_pg'>Última</a>";
    ?>
    <br><br>
    <a href="create.php"><button>Cadastro</button></a>
</body>

</html>
