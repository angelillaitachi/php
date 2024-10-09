<?php
// Ejercicio 2: Operaciones aritméticas

// a) 2 + 9 * 3 - 100 / 5
$result1 = 2 + 9 * 3 - 100 / 5;
echo "Ejercicio 2a: $result1<br>";

// b) ((6 * 10 - 45 + 80) / 10) / ((((12 + 3) * 5 - 45) / 9))
$result2 = ((6 * 10 - 45 + 80) / 10) / ((((12 + 3) * 5 - 45) / 9));
echo "Ejercicio 2b: $result2<br>";   

// c) (((2^10 - 1000) + 76) / (120 - 90 + (25 * 4 / 20))) / 5 + 10
$result3 = (((pow(2, 10) - 1000) + 76) / (120 - 90 + (25 * 4 / 20))) / 5 + 10;
echo "Ejercicio 2c: $result3<br>";

// d) Modificando el cálculo para evitar la división por cero
$denominador = (2 * 10 - 1000 / 50);
if ($denominador == 0) {
    $result4 = "Error: División por cero en la operación.";
} else {
    $result4 = (20 - 40 + (25 / 5 * 20) / $denominador + 40) / ((6 + 10) / (20 * 10 / 50 * 2));
}
echo "Ejercicio 2d: $result4<br>";
?>  
