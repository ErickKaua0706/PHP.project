<style> 
<?php 
$cor_voltar = "white" ;?>
a {color: <?php echo $cor_voltar ;?>}
</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora</title>
<style>
<?php
$cor_fundo = "blue" ;?>
body {background-color: <?php echo $cor_fundo ;?>}
</style>
</head>
<body> 
<div class="container">

<h2> Recebendo dados da calculadora</h2>
<?php

//verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

$numero1 = $_POST['num1'] ?? 0;

$operacao = $_POST['operacao'] ?? '';

$numero2 = $_POST['num2'] ?? 0;


switch ($operacao) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        // Verificação importante: não existe divisão por zero!
        if ($numero2 != 0) {
            $resultado = ($numero1 / $numero2);
        } else {
            $resultado = "Erro: Divisão por zero";
        }
        break;
    default:
        $resultado = "Operação inválida";
        break;
}
echo "<div class='dado'><strong>Resultado:</strong> " . htmlspecialchars ($resultado) . "</div>" ;
}

?>
<br>
<a href="javascript:history.go(-1)">Voltar pagina anterior</a>
</div>
</body>
</html>