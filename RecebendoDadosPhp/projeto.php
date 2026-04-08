<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando php front-end</title>
    <style>
    <?php 
    $cor_fundo = "red" ?>
    body {background-color: <?php echo $cor_fundo ;?>}
</style>
</head>
<body>
 <div class="container">
<form action="recebendo.php" method="POST"> 

<label> Nome Completo: </label>
<input type="text" name='nome' required placeholder ='digite seu nome completo'>
<br>
<br>
<label>Numero de telefone:</label>
<input type="tel" name='telefone' required placeholder ='(61)99999-9999'>
<br>
<br>
<label> Idade: </label>
<select type="number" name='idade'required placeholder='selecione sua idade'>    <option value="">selecione sua idade</option>

<option value="18-25">18-25</option>
<option value="26-35">26-35</option>
<option value="36-50">36-50</option>
<option value="51-60">51-60</option>
<option value="60+">60+</option></select>
<br>
<br>
<label> E-mail: </label>
<input type="text" name='E-mail' required placeholder='ExemploEmail@gmail.com'>
<br>
<br>

<button type="submit"> Enviar Dados </button>

</form>
 </div>   
</body>
</html>