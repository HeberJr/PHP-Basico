<?php
// Permitir que o usuário escolha entre somar e multiplicar dois números
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>somar ou multi</title>
</head>
<body>
<div>
    <?php
    
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "O resultado é $r";
        // http://localhost/PHP_guanabara/exemplos/somarOUmultiplicar.php?a=10&b=30&op=s para somar
        // http://localhost/PHP_guanabara/exemplos/somarOUmultiplicar.php?a=10&b=30&op=m ou qualquer letra para multiplicar
            
    ?>
</div>
    
</body>
</html>