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
// Obtener aleatorio del 1 al 7 y día de semana, 1 -> lunes

$dia = rand(1, 7);
if ($dia == 1) {
    echo "Lunes";
} elseif ($dia == 2) {
    echo "Martes";
} elseif ($dia == 3) {
    echo "Miércoles";
} elseif ($dia == 4) {
    echo "Jueves";
} elseif ($dia == 5) {
    echo "Viernes";
} elseif ($dia == 6) {
    echo "Sábado";
} else {
    echo "Domingo";
}

echo "\n";