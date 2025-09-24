<?php
// Arrays
// Arrays indexados
echo "Arrays indexados simples\n";
$coches = ["Aston Martin", "Audi", "Ferrari"];
// $coches = array ("Aston Martin", "Audi", "BMW");
var_dump($coches);
print_r($coches);

echo "Arrays indexados mixtos\n";
$un_array = [1, "string", true, 2.4, [1,2]];
var_dump($un_array);
print_r($un_array);

echo  "Engadindo elementos:\n";
array_push($coches, "Mercedes", "McLaren");
// Para un solo elemento $coches[] = "Mercedes" (polo final); ou $coches[x] = "Mercedes";
var_dump($coches);
print_r($coches);
echo "Numero de coches: " . count($coches) . "\n" . "Marcas:\n";
foreach ($coches as $meu_coche1) {
    echo $meu_coche1 . "\n";
}

// Arrays asociativos
echo "Arrays asociativos\n";
$meu_coche1 = [
    "marca" => "Aston Martin",
    "modelo" => "AMR25",
    "piloto" => "El nano"
];
var_dump($meu_coche1);

echo "Acceso directo a valores:\n";
echo "Marca: " . $meu_coche1["marca"] . "\n";
echo "Modelo: " . $meu_coche1["modelo"] . "\n";
echo "Piloto: " . $meu_coche1["piloto"] . "\n";

$meu_coche1 += ["color" => "Verde", "ano" => 2025];;
echo "Iterando cun foreach:\n";
foreach ($meu_coche1 as $key => $value) {
    echo "Clave: $key, Valor: $value\n";
}

// Crear arrays
echo "Crear arrays valeiras\n";
$meu_coche = [];
$meu_coche["marca"] = "Aston Martin";
$meu_coche["modelo"] = "AMR25";
$meu_coche["piloto"] = "Fernando Alonso";
var_dump($meu_coche);

echo "Array mixto en claves:\n";
$array_mixto = [];
$array_mixto[0] = "Mazá";
$array_mixto[1] = "pera";
$array_mixto["fruta"] = "banana";
var_dump($array_mixto);

function unhaFuncion()
{
    echo "Esta e una función\n";
}

$outro_array = [
    "car" => "Aston Martin",
    "mensaxe" => unhaFuncion()
];

$outro_array["mensaxe"];

// Updatear datos
echo "Actualizar datos:\n";
foreach ($coches as &$coche) {
    $coche = "Aston Martin";
}
var_dump($coches);
echo "Ollo coidado:\n";
$coche = "Isto e un erro";
var_dump($coches);
// Solución
unset($coche);

// Eliminar items
$coches = ["Aston Martin", "Audi", "Ferrari"];
echo "Eliminar items:\n";
var_dump($coches);

echo  "Eliminar item 1 con splice:\n";
array_splice($coches, 1, 1);
var_dump($coches);

echo "Eliminar item 1 con unset:\n"; // Mais usado en asociativo, coidado coa clave
unset($coches[0]);
var_dump($coches);

echo "Eliminar por valor: \n";
$novo_array = array_diff($meu_coche1, ["Aston Martin", "AMR25"]);
var_dump($novo_array);

echo "Eliminar por funcións:\n";
$coches = ["Aston Martin", "Audi", "Ferrari"];
array_pop($coches); // elimina o ultimo elemento
array_shift($coches); // elimina o primeiro elemento
var_dump($coches);

// Ordenar arrays
echo "Ordenar arrays:\n";
$coches = ["Volvo","BMW","Toyota"];
$numeros = [7, 1, 3, 2, 5, 4];

echo "Orden inicial:\n";
var_dump($coches);
var_dump($numeros);
sort($coches);
sort($numeros);
echo "En orden ascendente:\n";
var_dump($coches);
var_dump($numeros);

echo "En orden descendente:\n";
rsort($coches);
rsort($numeros);
var_dump($coches);
var_dump($numeros);

echo "Arrays asociativos:\n";
$idades = [
    "pedro" => 25,
    "pablo" => 37,
    "pepito" => 43
];
var_dump($idades);
echo "Ordenar por valor:\n";
asort($idades);
var_dump($idades);
echo "Ordenar por clave:\n";
ksort($idades);
var_dump($idades);
echo "Ordenar por valor descendente:\n";
arsort($idades);
var_dump($idades);


