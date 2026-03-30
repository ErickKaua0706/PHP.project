<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Dados do Cliente</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f4f4; }
        .container { max-width: 600px; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        input, textarea { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #667eea; color: white; padding: 12px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        button:hover { background: #5a6fd8; }
    </style>
</head>
<body>

<div class="container">
    <h2>📋 Cadastro de Cliente</h2>
    
    <form action="receber.php" method="POST">
        
        <label>Nome completo:</label>
        <input type="text" name="nome" required placeholder="Digite seu nome">

        <label>E-mail:</label>
        <input type="email" name="email" required placeholder="seuemail@exemplo.com">

        <label>Telefone:</label>
        <input type="tel" name="telefone" placeholder="(61) 99999-9999">

        <label>Idade:</label>
        <input type="number" name="idade" min="1" max="120">

        <label>Observação:</label>
        <textarea name="observacao" rows="4" placeholder="Digite algo aqui..."></textarea>

        <button type="submit">Enviar Dados</button>
    </form>
</div>

</body>
</html>