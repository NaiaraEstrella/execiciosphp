<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero = intval($_POST['numero']);
    
    
    if ($numero % 2 == 0) {
        $resultado = "par";
    } else {
        $resultado = "ímpar";
    }

   
    echo "O número $numero é $resultado.";
} else {
    echo "Por favor, envie o formulário.";
}
?>

</body>
</html>