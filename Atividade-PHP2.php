<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atividadephp2.css">
    <title>Verificação de Velocidade e Média do Aluno</title>
</head>

<body>
    <h1>Calculadora de média</h1>
    <form action="atividadephp2.php" method="post">
    <h2>Verificação de Velocidade</h2>
        <label for="velocidade">Digite a velocidade do veículo (em km/h):</label>
        <input type="number" id="velocidade" name="velocidade" step="0.1" required><br><br>

        <h2>Cálculo da Média do Aluno</h2>
        <label for="nota1">Digite a primeira nota:</label>
        <input type="number" id="nota1" name="nota1" step="0.1" required><br><br>
        <label for="nota2">Digite a segunda nota:</label>
        <input type="number" id="nota2" name="nota2" step="0.1" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>
