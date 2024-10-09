<?php
// Ejercicio 3: Evaluar expresiones con A = 4, B = 3, C = 1

$A = 4;
$B = 3;
$C = 1;

// a) B * A - B ^ 2 / 4 * C
$resultA = $B * $A - pow($B, 2) / (4 * $C);
echo "Ejercicio 3a: $resultA<br>";

// b) (A * B) / 3 ^ 2
$resultB = ($A * $B) / pow(3, 2);
echo "Ejercicio 3b: $resultB<br>";

// c) (((B + C) / 2 * A + 10) * 3 * B) - 6
$resultC = ((((($B + $C) / (2 * $A) + 10) * 3) * $B) - 6);
echo "Ejercicio 3c: $resultC<br>";
?>
