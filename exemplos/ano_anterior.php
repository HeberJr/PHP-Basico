<?php
// Mostrar qual foi o ano anterior ao ano atual
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano</title>
</head>
<body>
<div>
    <?php
        // http://localhost/PHP_guanabara/exemplos/ano_anterior?aa=2021
        // utilizar ?aa=2021 na frente da url
        $atual = $_GET["aa"];
        echo "O ano atual é $atual e o ano anterior é " . --$atual; // --$atual = pré decremento

    ?>
</div>
    
</body>
</html>