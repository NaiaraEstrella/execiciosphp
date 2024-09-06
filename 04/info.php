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
      
       $num1 = $_POST['num1'];
       $num2 = $_POST['num2'];
       $operacao = $_POST['operacao'];

       
       if (is_numeric($num1) && is_numeric($num2)) {
           
           $resultado = 0;

           
           switch ($operacao) {
               case '+':
                   $resultado = $num1 + $num2;
                   break;
               case '-':
                   $resultado = $num1 - $num2;
                   break;
               case '*':
                   $resultado = $num1 * $num2;
                   break;
               case '/':
                   
                   if ($num2 != 0) {
                       $resultado = $num1 / $num2;
                   } else {
                       echo "Não é possível dividir por zero.";
                       $resultado = null;
                   }
                   break;
               default:
                   echo "Operação inválida.";
                   $resultado = null;
                   break;
           }

           
           if ($resultado !== null) {
               echo "<p>Resultado: $resultado</p>";
           }
       } else {
           echo "<p>Por favor, insira números válidos.</p>";
       }
   }
   ?>
</body>
</html>