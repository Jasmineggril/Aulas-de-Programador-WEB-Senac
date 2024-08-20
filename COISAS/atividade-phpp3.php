<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $altura = $_POST["altura"];
        $peso = $_POST["peso"];
        $imc = $peso / ($altura * $altura);
        echo "<h3>Seu IMC é: " . number_format($imc, 2) . "</h3>";
    }
    ?>


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $desconto = $valor * 0.07;
        $valorComDesconto = $valor - $desconto;
        echo "<h3>Valor Original: R$ " . number_format($valor, 2, ',', '.') . "</h3>";
        echo "<h3>Desconto: R$ " . number_format($desconto, 2, ',', '.') . "</h3>";
        echo "<h3>Valor com Desconto: R$ " . number_format($valorComDesconto, 2, ',', '.') . "</h3>";
    }
    ?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sexo = $_POST["sexo"];
        $idade = $_POST["idade"];
        
        if ($sexo == "feminino" && $idade < 25) {
            echo "<h3>$nome: ACEITA</h3>";
        } else {
            echo "<h3>$nome: NÃO ACEITA</h3>";
        }
    }
    ?>
