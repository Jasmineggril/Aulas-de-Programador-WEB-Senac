<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Desafio-PHP.css">
    <title>Atividades - PHP 3</title>

    <style>
        h1, h2, h3 {
            color: black;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        input, button {
            margin-top: 10px;
        }
        form {
            display: inline-block;
            margin-bottom: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: left;
        }
    </style>

</head>

<body>
    <h1>IMC</h1>

    <form method="post" action="">
    <div>
    <label for="altura">Altura (m): </label>
        <input type="text" id="altura" name="altura" required>
        <br>
        <label for="peso">Peso (kg): </label>
        <input type="text" id="peso" name="peso" required>
        <br>
        <button type="submit" name="calcular_imc">Calcular IMC</button>

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular_imc'])) {
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        
        if (is_numeric($altura) && is_numeric($peso)) {
            $imc = $peso / ($altura * $altura);
            echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";
        } else {
            echo "<h3>Por favor, insira valores válidos para altura e peso.</h3>";
        }
    }
    ?>
    </div>    
   

    <h2>CALCULO DE DESCONTO</h2>

    <form method="post" action="">
    <div>
    <label for="valor">Valor do Produto (R$): </label>
        <input type="text" id="valor" name="valor" required>
        <br>
        <button type="submit" name="calcular_desconto">Calcular Desconto</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular_desconto'])) {
        $valor = $_POST["valor"];
        if (is_numeric($valor)) {
            $desconto = $valor * 0.07;
            $valorComDesconto = $valor - $desconto;
            echo "<h3>Valor Original: R$ " . number_format($valor, 2, ',', '.') . "</h3>";
            echo "<h3>Desconto: R$ " . number_format($desconto, 2, ',', '.') . "</h3>";
            echo "<h3>Valor com Desconto: R$ " . number_format($valorComDesconto, 2, ',', '.') . "</h3>";
        } else {
            echo "<h3>Por favor, insira um valor válido para o produto.</h3>";
        }
    }
    ?>


    </div>    
        
    <h3>VERIFICAÇÃO DE ACEITAÇÃO</h3>

    <form method="post" action="">
        <div>

        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="sexo">Sexo: </label>
        <select id="sexo" name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select>
        <br>
        <label for="idade">Idade: </label>
        <input type="text" id="idade" name="idade" required>
        <br>
        <button type="submit" name="verificar_aceitacao">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['verificar_aceitacao'])) {
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $idade = $_POST["idade"];
        if (is_numeric($idade)) {
            if ($sexo == "feminino" && $idade < 25) {
                echo "<h3>$nome: ACEITA</h3>";
            } else {
                echo "<h3>$nome: NÃO ACEITA</h3>";
            }
        } else {
            echo "<h3>Por favor, insira uma idade válida.</h3>";
        }
    }
    ?>
        </div>
        

</body>
</html>



