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
       
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $correctUsername = "admin";
        $correctPassword = "1234";

       
        if ($username === $correctUsername && $password === $correctPassword) {
            echo "<p>Login bem-sucedido</p>";
        } else {
            echo "<p>Login ou senha incorretos</p>";
        }
    }
    ?>
</body>
</html>