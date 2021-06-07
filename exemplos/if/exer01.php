<?php
// Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo if</title>
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Voce nasceu em $a e terá $i anos. <br/>";

            // uso da escrutura condicional if
            if($i >= 18){
                $v = "ja pode votar";
                $d = "ja pode dirigir";
            }

            else{
                $v = "NÃO pode votar";
                $d = "NÃO pode dirigir";
            }

            echo "Com essa idade voce $v e tambem $d";
        ?>
    </div>
</body>
</html>