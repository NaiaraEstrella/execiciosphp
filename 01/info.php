<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;

        
        if ($idade < 0) {
            echo "Idade inválida. Por favor, insira um número positivo.";
        } else if ($idade < 18) {
            echo "Você não pode se cadastrar. A idade mínima é 18 anos.";
        } else {
            echo "Você pode se cadastrar!";
        }
    }
    
    ?>
</body>
</html>