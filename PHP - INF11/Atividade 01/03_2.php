<!-- HTML + PHP -->

<?php
// Definindo variáveis para o título e a mensagem
$titulo = "Bem-vindo à Minha Página!";
$mensagem = "Olá! Esta é uma mensagem de boas-vindas gerada com PHP.";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <p><?php echo $mensagem; ?></p>
</body>
</html>
