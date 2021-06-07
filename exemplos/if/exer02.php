<?php
// Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar com voto opicional
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
            if($i < 16){
                $tipoVoto = "nao vota";
            }
            elseif (($i >= 16 && $i < 18) || ($i > 65)){
                $tipoVoto = "voto opicional";
            }
            else{
                $tipoVoto = "voto obrigatório";
            }
            

            echo "Para essa idade, $tipoVoto";
        ?>
    </div>
</body>
</html>