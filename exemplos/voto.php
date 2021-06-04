<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voto</title>
</head>
<body>
<?php

    // voto é obrigatório?
    // http://localhost/PHP_guanabara/exemplos/voto.php?an=2000
    // utilize o ?an=2000 na frente da url
    $ano = $_GET["an"];
    $idade = 2021 - $ano;
    echo "Quem nasceu em $ano tem a idade de $idade anos.";
    $tipo = ($idade>=18 and $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
    echo "<br/>E dessa forma seu voto é $tipo";

?>
    
</body>
</html>