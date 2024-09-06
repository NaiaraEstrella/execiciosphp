<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nota = intval($_POST['nota']);
    

    if ($nota < 0 || $nota > 10) {
        echo "Nota inválida. Por favor, insira uma nota entre 0 e 10.";
    } else {
      
        switch (true) {
            case ($nota == 10):
                $classificacao = "A";
                break;
            case ($nota == 9):
                $classificacao = "B";
                break;
            case ($nota >= 7 && $nota <= 8):
                $classificacao = "C";
                break;
            case ($nota >= 5 && $nota <= 6):
                $classificacao = "D";
                break;
            case ($nota >= 0 && $nota <= 4):
                $classificacao = "E";
                break;
            default:
                $classificacao = "Nota fora do intervalo permitido.";
                break;
        }

        
        echo "Sua nota é $nota, e a classificação é: $classificacao.";
    }
} else {
    echo "Por favor, envie o formulário.";
}
?>
</body>
</html>
