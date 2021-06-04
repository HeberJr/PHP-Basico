<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual / indentico</title>
</head>
<body>
<div>
    <?php
    
        $a = 3; // numero
        $b = "3"; // string

        echo "Variavel A: $a<br/>";
        echo "Variavel B: $b<br/><br/>";

        $r = ($a == $b)?"SIM":"NAO"; // a é igual (==) a b?
        echo "As variaveis A e B são iguais? $r<br/>";

        $r = ($a === $b)?"SIM":"NAO"; // a é identica(===) a b?
        echo "As variaveis A e B são identicas? $r<br/>";

    ?>
</div>
    
</body>
</html>