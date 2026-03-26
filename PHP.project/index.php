<link rel="stylesheet" href=".css">
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project.Sistema de aprovação escolar</title>
</head>
<body>
    <?php 

$notaaprovada = 7.10;
$notareprovada = 5.00; 

    $_GET['nota'] = 7.10;
    echo "Você foi aprovado com a nota:" . $_GET['nota'] . "<br>";
    
$_GET['nota'] = 5.00;
echo "Você foi reprovado com a nota:" . $_GET['nota'] . "<br>";







    
    ?>
</body>
</html>