<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
</head>
<body>
    <h1>CADASTRO USUÁRIOS</h1>
    <?php
    if(isset($_SESSION['msg'])){
       echo $_SESSION['msg'];
       unset($_SESSION['msg']); 
    }
    ?>

    <form action="processa.php" method="post">
        <label> Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome complete"> <br> <br>
        <label>E-mail:</label>
        <input type="email" name="email" placeholder="Digite o email"> <br> <br>

        <input type="submit" value="CADASTRAR">
    </form>    
</body>
</html>