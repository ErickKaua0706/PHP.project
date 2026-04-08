<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>
    <?php
    $cor_fundo = "blue"; ?>
    body {background-color: <?php echo $cor_fundo ;?>}
</style>
</head>
<body>
<div class="container">
    <form action="Receber.php" method="POST">



    <label for="num1">Digite o primeiro número:</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>
    <label for="operacao">Selicione o operador:</label>
    <br><br>
    <select name="operacao" id="operacao">
        <option value="">Selecione o Operador</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <label for="num2">Digite o segundo número:</label>
    <input type="number" id="num2" name="num2" required>
    <br><br>
    <button type="submit">Calcular</button>
    <br><br>
    </form>
</div>
</body>
</html>