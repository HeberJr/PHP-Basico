<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- style = css -->
    <style>
        h1 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }

        h2 {
            font: 15pt Arial; 
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        // variáveis SEMPRE vão começar com $ 
        $idade = 21; // exemplo de variável
        $nome = "Heber"; // exemplo de variável
        echo $nome." tem ".$idade." anos!</br>"; // concatenação on
        echo "$nome tem $idade anos!"; // concatenação off
        echo "<h1>$nome tem $idade anos!</h1>"; // exemplo de style | para utilizar o style em um echo, vc deve inserir o h1, h2, h3, etc para poder localizalo
        // funciona igual
    ?>

    <br/> <br/> <!-- cada <br/> pula linha-->

    <?php

        // exemplo de soma SIMPLES
        $n1 = 3; // a variável 1
        $n2 = 2; // a variável 2
        $s = $n1 + $n2; // a soma
        echo $s; // printa o resultado

        // todos os operadores aritméticos com concatenação
        echo "<br/>A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo  "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O módulo vale ". ($n1%$n2);
        // calculo de média
        $m = ($n1 + $n2) / 2; 
        echo "<br/>A média vale $m";

    ?>

    <?php
        // funções aritméticas
        // estilizado com css = style
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        // para usar digite na url isso: http://localhost/PHP_guanabara/tipos?x=4&y=3.5
        // especificamente isso => ?x=4&y=3.5 na frente da url

        // funções
        echo "<h2>Valores recebidos pela url é: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 é " . abs($v2); // abs() - valor absoluto
        echo "</br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2); // pow() - potenciação
        echo "</br>A raiz de $v1 é " . sqrt($v1); // sqrt() - raiz quadrada
        echo "</br>O valor de $v2 arredondado é " . round($v2); // round() - arredondamento
        echo "</br>A parte inteira de $v2 é " . intval($v2); // intval() - valor inteiro da variável
        echo "<br/>O valor de $v1 em moeda é R$" . number_format($v1,2,",", "."); // number_format() - formatação de real/dinheiro
        
    ?>
</div>
</body>
</html>