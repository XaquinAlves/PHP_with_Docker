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
echo suma_numeros(2,3);