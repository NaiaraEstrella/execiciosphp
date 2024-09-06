<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();


if (!isset($_SESSION['saldo'])) {
    $_SESSION['saldo'] = 0;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $acao = $_POST['acao'];
    
    switch ($acao) {
        case '1':
            
            $mensagem = "Seu saldo atual é: R$ " . number_format($_SESSION['saldo'], 2, ',', '.');
            break;
        case '2':
            
            $valor = $_POST['valor'];
            if (is_numeric($valor) && $valor > 0) {
                $_SESSION['saldo'] += $valor;
                $mensagem = "Depósito de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!";
            } else {
                $mensagem = "Valor inválido para depósito.";
            }
            break;
        case '3':
            
            $valor = $_POST['valor'];
            if (is_numeric($valor) && $valor > 0) {
                if ($valor <= $_SESSION['saldo']) {
                    $_SESSION['saldo'] -= $valor;
                    $mensagem = "Saque de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!";
                } else {
                    $mensagem = "Saldo insuficiente.";
                }
            } else {
                $mensagem = "Valor inválido para saque.";
            }
            break;
        case '4':
           
            session_unset();
            session_destroy();
            $mensagem = "Sessão encerrada. Volte sempre!";
            break;
        default:
            $mensagem = "Opção inválida.";
            break;
    }
}
?>

<?php
   
    if (isset($mensagem)) {
        echo "<p>$mensagem</p>";
    }
    ?>
</body>
</html>