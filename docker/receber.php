<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        .container { max-width: 700px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        .dado { margin: 15px 0; padding: 10px; background: #f8f9fa; border-left: 5px solid #667eea; }
    </style>
</head>
<body>

<div class="container">
    <h2>✅ Dados Recebidos do Cliente</h2>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Pegando os dados do formulário
        $nome       = $_POST['nome'] ?? 'Não informado';
        $email      = $_POST['email'] ?? 'Não informado';
        $telefone   = $_POST['telefone'] ?? 'Não informado';
        $idade      = $_POST['idade'] ?? 'Não informado';
        $observacao = $_POST['observacao'] ?? 'Sem observação';

        // Mostrando os dados de forma segura
        echo "<div class='dado'><strong>Nome:</strong> " . htmlspecialchars($nome) . "</div>";
        echo "<div class='dado'><strong>E-mail:</strong> " . htmlspecialchars($email) . "</div>";
        echo "<div class='dado'><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</div>";
        echo "<div class='dado'><strong>Idade:</strong> " . htmlspecialchars($idade) . "</div>";
        echo "<div class='dado'><strong>Observação:</strong> " . nl2br(htmlspecialchars($observacao)) . "</div>";

    } else {
        echo "<p style='color:red;'>Nenhum dado foi enviado.</p>";
    }
    ?>

    <br>
    <a href="index.php">← Voltar ao formulário</a>
</div>

</body>
</html>