<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel de variavel</title>
</head>
<body>
<div>
    <?php

        $x = "abc";
        $$x = "def";
        echo "O conteudo da variavel x é $x";
        echo "<br/>A variavel criada recebeu o valor $abc";

    ?>
</div>
    
</body>
</html>