<?php
// Aplicar 10% de desconto ao preço de um produto
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
<div>
    <?php

        $preco = $_GET["p"];
        echo "O preço do produto é R$ " . number_format($preco, 2);
        // $preco = $preco + ($preco*10/100); maneira normal
        $preco -= $preco * 10 / 100; // maneira de atribuição
        echo "<br/>O novo preço com 10% de desconto é R$ $preco"; // normal
        echo "<br/>O novo preço com 10% de desconto é R$ " . number_format($preco, 2); // concatenado para numero em reais

    ?>
</div>
    
</body>
</html>