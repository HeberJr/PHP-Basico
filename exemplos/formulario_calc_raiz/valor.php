<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            text-align: center;
            color: white;
            font: 15pt Arial;
            background-color: black;
        }
        a{
            color: red;
        }
    </style>
</head>
<body>
    <div>
        <?php
        
        $valor = $_GET["v"];
        $rq = sqrt($valor); // sqrt é função de calculo de raiz
        echo "O valor enviado foi $valor<br/>";
        echo "A raiz é " . number_format($rq, 2); // number_format , 2 pra deixar duas casas decimais
        
        echo "<br/><br/>";
        ?>

        <a href="modelo.html">Voltar</a>

    </div>
</body>
</html>