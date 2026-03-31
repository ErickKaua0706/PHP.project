<a href="javascript:history.go(-1)">Voltar pagina anterior</a>
<style>
    <?php 
    $cor_fundo = "red" ?>
    body {background-color: <?php echo $cor_fundo ;?>}
</style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo Dados</title>
</head>
<body>
    <div class="container">
        <h2>Dados Recebidos do Formulário</h2>

        <?php
        
        //verificando se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST['nome'] ?? 'Não informado';


echo "<div=class='dado'><strong>Nome:</strong> " . htmlspecialchars ($nome) . "</div>" ;








        }
        
        
        
        ?>

</body>
</html>