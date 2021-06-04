<?php

$a = 3; // a = 3
$b = $a; // b = a, então, b = 3
$b += 5; // b = 3 + 5, que é 8
echo "Variavel 'a' é $a<br/>";
echo "Variavel 'b' é $b<br/>";

echo "-----------------";
echo "<br/>";

// variavel referenciada

$a = 3; // a = 3
$b = &$a; // b = a, então, b = 3 | O & antes da variavel referencia ela
$b += 5; // b = 3 + 5, que é 8, como a variável $a esta sendo referenciada, a e b = 8
echo "Variavel 'a' é $a<br/>";
echo "Variavel 'b' é $b";
