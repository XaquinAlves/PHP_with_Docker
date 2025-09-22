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
// AND
if ($x == 10 && $y == 20) {
    echo "X e Y valen 10 e 20";
}
if ($x == 10 and $y == 20) {
    echo "X e Y valen 10 e 20";
}
//OR
if ($x == 10 || $y == 20) {
    echo "X ou Y valen 10 ou 20";
}
if ($x == 10 or $y == 20) {
    echo "X ou Y valen 10 ou 20";
}
// XOR
if ($x == 10 xor $y == 30) {
    echo "X valen 10 ou Y vale 20";
}


$user = "";
var_dump(empty($use));
echo "\n";
echo $estado = empty($user) ? "anonimo" : "logeado";