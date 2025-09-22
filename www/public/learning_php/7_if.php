<?php
$variable = 4;
if (5 > 3) {
    echo "5 es mayor que 3\n";
}

//EJERCICIO
// Sacar mensaje por pantalla que diba buenos días,
// tardes o noches en función de la hora

echo date('H:i:s') . "\n";
$hora = date('H');
if ($hora >= 6 && $hora < 12) {
    echo "Buenos dias";
} elseif ($hora < 20) {
    echo "Buenas tardes";
} else {
    echo "Buenas noches";
}
echo "\n";
