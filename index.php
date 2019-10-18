<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade Hash</title>
    <style>
    
    </style>
</head>
<body>
<div style="text-align: center; font-size: 30px;">
    <form method="post">
    <h2>Faça login para continuar</h2>

    <label>Login:</label>
    <input type="text">

    <label>Senha:</label>
    <input name="senha" type="password">

    <button type="submit" name="enviar"> Enviar </button><br>

    </form>
    <br>
    <?php

    if(isset($_POST["enviar"])){
        $senha = $_POST["senha"];

        echo "Sua senha criptografada fica: <b>".hash('haval256,5', $senha)."</b>";
    } 

    ?>
</div>
</body>
</html>