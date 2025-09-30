<?php
/**
 * Ejercicio 1: Dado un array de cadenas, devuelve un array con solo aquellas
 * que sean un palíndromo (se leen igual al derecho y al revés).
 * (Usando array_filter)
 */
function filtrarPalindromos(array $palabras): array
{
    return array_values(array_filter($palabras,
        fn($p) => strtolower($p) == strtolower(strrev($p))));
}

echo "=== Ejercicio 1 ===\n";
print_r(filtrarPalindromos(["oso", "casa", "reconocer", "php", "Ana"]));

/**
 * Ejercicio 2: Dada una lista de productos con nombre y precio,
 * devuelve un array con los nombres de los productos que cuestan más de 20 €.
 * (Usando array_filter + array_map)
 */
function productosCaros(array $productos, float $precio): array
{
    return array_values(array_map(fn($p) => $p["nombre"],
        array_filter($productos, fn($p) => $p["precio"] > $precio)));
}

$productos = [
    ["nombre" => "Camiseta", "precio" => 15],
    ["nombre" => "Pantalón", "precio" => 30],
    ["nombre" => "Zapatos", "precio" => 50],
];
echo "=== Ejercicio 2 ===\n";
print_r(productosCaros($productos,20));

/**
 * Ejercicio 3: Dado un array de frases, devuelve un array con el
 * número de palabras de cada frase. (Usando array_map + explode)
 */
function contarPalabrasFrases(array $frases): array
{
    return array_map(fn($f) => count(explode(" ", $f)),
        $frases);
}


echo "=== Ejercicio 3 ===\n";
print_r(contarPalabrasFrases([
    "Hola mundo",
    "PHP es divertido",
    "La programación funcional con map filter reduce"
]));

/**
 * Ejercicio 4: Dada una lista de estudiantes con sus notas,
 * calcula el promedio de todas las notas.(usando array_reduce + array map)
 */
function promedioNotas(array $estudiantes): float
{
    return array_reduce(array_map(fn($s) => $s["nota"], $estudiantes), fn($x, $y) => $x + $y,0)/count($estudiantes);
}

echo "=== Ejercicio 4 ===\n";
$alumnos = [
    ["nombre" => "Ana", "nota" => 7],
    ["nombre" => "Luis", "nota" => 5],
    ["nombre" => "Marta", "nota" => 9]
];
echo promedioNotas($alumnos) . "\n";

/**
 * Ejercicio 5: Dado un array de string, devuelve la longitud total
 * de las palabras que tiene más de 3 caracteres.
 */
function longitudPalabrasLargas(array $palabras): int
{
    return array_reduce(array_filter($palabras, fn($p) => strlen($p) > 3), fn($acumulador, $y) => $acumulador + strlen($y), 0);
}

echo "=== Ejercicio 5 ===\n";
echo (longitudPalabrasLargas(["sol", "estrella", "luz", "universo"])) . "\n";

/**
 * Ejercicio 6: Dado un array de frases, devuelve un array con
 * cada frase invertida por palabras.
 */
function invertirFrases(array $frases): array
{
    $result = [];
    foreach ($frases as $f) {
        $result[] = implode(" ", array_reverse(explode(" ", $f)));
    }
    return $result;
}
echo "=== Ejercicio 6 ===\n";
print_r(invertirFrases([
    "Hola mundo",
    "PHP es divertido",
    "programación funcional"
]));

/**
 * Ejercicio 7: Dado un array de números, devuelve el producto de los impares.
 */

function productoImpares(array $numeros): int
{
    //return array_reduce(array_filter($numeros, fn($n) => $n % 2 != 0), fn($acc, $num) => $acc * $num, 1);
    return array_reduce($numeros, fn($acc, $num) => $acc * ($num % 2 != 0 ? $num : 1), 1);
}

echo "=== Ejercicio 7 ===\n";
echo productoImpares([1, 2, 3, 4, 5]) . "\n";

/**
 * Ejercicio 8: Dado un array de cadenas, devuelve un array asociativo
 * donde la clave es la palabra y el valor es su longitud.
 * (Usando array_map + array_combine)
 */
function mapaLongitudes(array $palabras): array
{
    return array_combine($palabras, array_map(fn($p) => strlen($p), $palabras));
}

echo "=== Ejercicio 8 ===\n";
print_r(mapaLongitudes(["php", "programacion", "array", "reduce"]));

/**
 * Ejercicio 9: Dada una lista de personas con nombre y edad,
 * devuelve la edad promedio de los mayores de edad.
 */
function promedioMayores(array $personas): float
{
    $num_personas = 0;
    $edades = 0;
    foreach ($personas as $persona) {
        if($persona["edad"] >= 18) {
            $num_personas++;
            $edades += $persona["edad"];
        }
    }
    return $num_personas > 0 ? $edades / $num_personas : 0;
}
function promedioMayores2(array $personas): float
{
    $array_maiores = array_filter($personas, fn($p) => $p["edad"] >= 18);
    return count($array_maiores) > 0 ? array_reduce($array_maiores,
            fn($acc, $p) => $acc + $p["edad"], 0) / count($array_maiores) : 0;
}

echo "=== Ejercicio 9 ===\n";
echo promedioMayores([
    ["nombre" => "Ana", "edad" => 17],
    ["nombre" => "Luis", "edad" => 20],
    ["nombre" => "Marta", "edad" => 25]
]) . "\n";

/**
 * Ejercicio 10: Dado un array de palabras, devuelve la palabra mas larga.
 */
function palabraMasLarga(array $palabras): string{
    return array_reduce($palabras, fn($acc, $palabra) => strlen($palabra) > strlen($acc) ? $palabra : $acc, "");
}
echo "=== Ejercicio 10 ===\n";
echo palabraMasLarga(["sol", "estrella","galaxia","universos"]);

/**
 * Ejercicio 11: Dado un array de palabras, devuevle un array con las palabras ordenadas
 * por longitud de menor a mayor.(Usando usort con funcion anónima + array_values)
 */
function ordenarPorLongitusd(array $palabras): array
{

}

echo "=== Ejercicio 11 ===\n";
printr(ordenarPorLongitud(["php", "map", "filter", "reduce", "programacion]));