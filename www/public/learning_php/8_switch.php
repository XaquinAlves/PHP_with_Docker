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

// Do it faster

$diaSemana = [
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo"
];

echo $diaSemana[$dia] . "\n";


// match

$dia2 = match($dia){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miércoles",
    4 => "Jueves",
    5 => "Viernes",
    6 => "Sábado",
    7 => "Domingo",
    default => "Numero non valido"
};
echo "El dia es: $dia2 \n";

$tipo_dia = match($dia){
    1,2,3,4,5 => "dia laborable",
    6,7 => "fin de semana",
    default => "Numero non valido"
};
echo "El dia es: $tipo_dia \n";

$tipo_dia2 = match($dia){
    $dia >= 1 && $dia <6 => "dia laborable",
    6,7 => "fin de semana",
    default => "Numero non valido"
};
echo "El dia es: $tipo_dia2 \n";