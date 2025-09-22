<?php
// Matemáticos
$x = 5**2; // 5²
echo $x;
echo "\n";

// Comparación
// Comparar sin comparar tipo de variable
var_dump(5 == "5");
// Comparar teniendo en cuenta el tipado
var_dump(5 === "5");
// Diferencia sin comparar tipo de variable
var_dump(5 != "5");
// Diferencia teniendo en cuenta el tipado
var_dump(5 !== "5");

// Spaceship
$x = 10;
$y = 20;
echo ($x <=> $y);
echo "\n";

// Incrementales

echo ++$x;
echo "\n";
echo $x;
echo "\n";
echo $y++;
echo "\n";
echo $y;
echo "\n";

// Lógicos
$x = 10;
$y = 20;

if ($x == 10 && $y == 20) {
    echo "X e Y valen 10 e 20";
}