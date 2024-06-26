<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Desafio-PHP.css">
    <title>DESAFIOPHP</title>
</head>

<body>
    <h1>CADASTRE-SE</h1>
    <form action="desafiophp.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="username">Nome do Usuário:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required>

        <label for="datadenascimento">Data de Nascimento:</label>
        <input type="date" id="datadenascimento" name="datadenascimento" required>

        <label for="gender">Sexo:</label>
        <input type="text" id="gender" name="gender" required>

        <label for="address">Endereço:</label>
        <input type="text" id="address" name="address" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>



