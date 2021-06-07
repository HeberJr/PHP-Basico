<?php
// Fazer a média de um aluno, mostrando se está aprovado, recuperação ou reprovado.
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
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        $nn = ($n1 + $n2) / 2;

            if($nn >= 7){ // se atente no >=
                $nfinal = "APROVADO";
            }
            elseif ($nn >= 5 && $nn < 6.9){
                $nfinal = "RECUPERAÇÃO";
            }
            else{
                $nfinal = "REPROVADO";
            }
            

            echo "Voce está $nfinal com $nn";
        ?>
    </div>
</body>
</html>