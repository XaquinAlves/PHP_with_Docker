<?php
// WHILE
$i = 1;
echo "WHILE\n";
while ($i <6){
    echo $i . "\n";
    $i++;
}

$i = 1;
echo "WHILE CON BREAK\n";
while ($i <6){
    if ($i == 3) break;
    echo $i . "\n";
    $i++;
}

$i = 0;
echo "WHILE CON CONTINUE\n";
while ($i <6){
    $i++;
    if ($i == 3) continue;
    echo $i . "\n";
}

// DO WHILE
$i = 1;
echo "DO WHILE\n";
do {
    echo $i . "\n";
    $i++;
}while ($i <6);

// FOR
echo "FOR\n";
for ($j = 0; $j <= 10; $j++){
    echo $j . "\n";
}

// FOREACH
$colores = ["rojo", "verde", "azul"];
echo "FOREACH\n";
foreach ($colores as $color) {
    echo "El color es: $color" . "\n";
}

$miembros = [
    "Pedro" => 35,
    "Pepe" => 10,
    "Antonio" => 43
];
echo "FOREACH con CLAVE-VALOR\n";
foreach ($miembros as $nombre => $edad) {
    echo "$nombre tiene $edad años\n";
}