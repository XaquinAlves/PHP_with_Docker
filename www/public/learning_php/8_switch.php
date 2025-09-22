<?php
// Obtener aleatorio del 1 al 7 y día de semana, 1 -> lunes
$dia = rand(1, 7);

switch ($dia) {
    case 1: echo "Lunes";
        break;
    case 2: echo "Martes";
        break;
    case 3: echo "Miercoles";
        break;
    case 4: echo "Jueves";
        break;
    case 5: echo "Viernes";
        break;
    case 6: echo "Sábado";
        break;
    case 7: echo "Domingo";
        break;
}
echo "\n";