<?php
echo "FUNCIÓN SIN RETORNO\n";
function mi_funcion($parametro1)
{
    echo "el argumento es: $parametro1\n";
}
mi_funcion("ola");

echo "FUNCIÓN CON RETORNO SIN TIPAR\n";
function mi_funcion2($parametro1)
{
    return $parametro1 + 1;
}
echo mi_funcion2(2) . "\n";

echo "FUNCIÓN CON RETORNO TIPADO\n";
function mi_funcion3($parametro1) : float
{
    return $parametro1 + 1;
}
echo mi_funcion3(2) . "\n";

$num = 5;
echo "Pasar argumentos por referencia\n";
function sumar_cinco(&$numero)
{
    $numero += 5;
}
sumar_cinco($num);
echo $num . "\n";

echo "Función con numero indeterminado de argumentos\n";
function suma_numeros(...$x)
{
    $resultado = 0;
    foreach ($x as $numero) {
        $resultado += $numero;
    }
    return $resultado;
}
echo suma_numeros(2,3) .  "\n";

function suma_numeros2(...$x)
{
    $resultado = 0;
    $len = count($x);
    for ($i = 0; $i < $len; $i++) {
        $resultado += $x[$i];
    }
    return $resultado;
}
echo suma_numeros2(2,"7 dias") . "\n";

// Saludar a unha familia
function saludar_familia($apellido,...$nombres)
{
    foreach ($nombres as $nombre) {
        echo "Hola $nombre $apellido\n";
    }
}

saludar_familia("Perez", "Maria", "Juan");

echo "Tipado de funciones\n";
function suma_numeros3(int $x, int $y): int
{
    return $x + $y;
}
// si pomos <php? declare(strict_types=1); esto non funciona
echo suma_numeros3("1.1",2);
// Pero echo suma_numeros3("7 dias",2) aquí non vai NUNCA
