<?php
function verificarvelocidade($velocidade) {
    $velocidadeMedia = 60;

    if ($velocidade == $velocidadeMedia) {
        return "VERDE: PROSSIGA<br>";
    } elseif ($velocidade == 80) {
        return "AMARELO: REDUZA <br>";
    } elseif ($velocidade > 80) {
        return "VERMELHO: MULTADO<br>";
    } else {
        return "Velocidade dentro do limite permitido<br>";
    }
}

function calcularmedia($nota1, $nota2) {
    $media = ($nota1 + $nota2) / 2;

    if ($media > 6) {
        return "Aluno APROVADO com média: $media<br>";
    } else {
        return "Aluno REPROVADO com média: $media<br>";
    }
}

$velocidade = (float)$_POST['velocidade'];
$nota1 = (float)$_POST['nota1'];
$nota2 = (float)$_POST['nota2'];

echo verificarvelocidade($velocidade);
echo calcularmedia($nota1, $nota2);
?>