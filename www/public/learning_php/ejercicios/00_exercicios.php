<?php

/*
 * 1. Contar palabras más largas de N caracteres
 */
function countLongWords(string $text, int $length): int {
    $words = explode(" ", $text);
    $result = 0;
    foreach ($words as $word) {
        if (strlen($word) > $length) {
            $result++;
        }
    }
    return $result;
}

echo countLongWords("Hola mundo que tal estás", 3) . "\n";
/*
 * Dado el número de tarjeta 1234567812345678,
 * enmascara todos menos los últimos 4 dígitos
 */
function maskCardNumber(string $cardNumber): string
{
    $mask = str_repeat("*", strlen($cardNumber) - 4);
    return substr_replace($cardNumber, $mask , 0, -4);
}
echo maskCardNumber("1234567812345678") . "\n";

/*
 * Declara constantes MIN_EDAD = 18 y MAX_EDAD = 65.
 * Crea una funcion que verifique que una edad está en rango
 */

const MIN_EDAD = 18;
const MAX_EDAD = 65;
function checkAge(int $age): bool
{
 return $age >= MIN_EDAD && $age <= MAX_EDAD;
}
var_dump(checkAge(16));
var_dump(checkAge(26));
var_dump(checkAge(70));

/*
 * Dado un numero do 1 ao 12, devolve o nombre do mes
 */
function getMonthTrimester(int $month): string
{
    return match ($month) {
        1,2,3 => "Primer trimestre",
        4,5,6 => "Segundo trimestre",
        7,8,9 => "Tercer trimestre",
        10,11,12 => "Cuarto trimestre",
        default => "Mes invalido"
    };
}
echo getMonthTrimester(7) . "\n";

function getMonthTrimesterComparative(int $month): string
{
    return match (true) {
        $month <= 0 => "Mes invalido",
        $month <= 3 => "Primer trimestre",
        $month <= 6 => "Segundo trimestre",
        $month <= 9 => "Tercer trimestre",
        $month <= 12 => "Cuarto trimestre",
        default => "Mes invalido"
    };
}
echo getMonthTrimesterComparative(0) . "\n";

/*
 * Genera la tabla de multiplicar de un humero n en un array indexado
 */

function tablaMultiplicar(int $n) : array
{
    $tabla = []; //$tabla = array();
    for ($i = 1; $i <= 10; $i++) {
        $tabla[] = "$n X $i = " . ($n * $i);
    }
    return $tabla;
}
print_r(tablaMultiplicar(5));

/*
 * Dado un array, elimina los duplicados y devuelve cuantos había
 */
$arrayEjemplo = ["ola","ola",1,1,2,3,4,4];
function eliminarDuplicadosTeacher(array &$array): array
{
    $unico = array_unique($array);
    $duplicados = count($array) - count($unico);

    return [
        "array" => $unico,
        "duplicados" => $duplicados
    ];
}
function eliminarDuplicados(array &$array): int
{
    $numberOfElements = count($array);
    $array = array_unique($array);
    return $numberOfElements - count($array);
}
print_r(eliminarDuplicadosTeacher($arrayEjemplo));
print_r($arrayEjemplo);
echo "Duplicados eliminados: " . eliminarDuplicados($arrayEjemplo) . "\n";
print_r($arrayEjemplo);

/*
 * Dadu un string, devuevlve un array asociativo con la frecuencia de cada palabra
 */
$texto_ejemplo = "ola OLA que tal tal tal";
function frecuenciaPalabras(string $text): array
{
    // My version
    $result = [];
    $words = explode(" ", strtolower($text));
    foreach ($words as $word) {

        if ($result[$word] ?? false > 0) {
            $result[$word]++;
        } else {
            $result[$word] = 1;
        }
    }

    return $result;
}
print_r(frecuenciaPalabras($texto_ejemplo));

function frecuenciaParabrasNull(string $text) : array
{
    $result = [];
    $words = explode(" ", strtolower($text));

    foreach ($words as $word) {
        $result[$word] = ($result[$word] ?? 0) + 1;
    }

    return $result;
}

print_r(frecuenciaParabrasNull($texto_ejemplo));

function frecuenciaPalabrasTernaria(string $text): array
{
    $result = [];
    $words = explode(" ", strtolower($text));

    foreach ($words as $word) {

    }
}

/*
 * Crea unha función que reciba multiples strings y devuelva el mas largo
 */

function longestString(...$text) : string
{
    $bigger = "";

    foreach ($text as $word) {
        if (strlen($word) > strlen($bigger)) {
            $bigger = $word;
        }
    }

    return $bigger;
}

echo longestString("ola","ola que tal", "ola que tal estás");
echo "\n";

/*
 * Crea unha función que imite el comportamiento de array_diff
 */
$array_ejemplo = array_diff([1,2,3,4],[1,2]);
print_r($array_ejemplo);

function arrayDiffPropio(...$array) : array {

}
