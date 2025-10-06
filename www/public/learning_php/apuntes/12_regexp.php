<?php
/**
 * preg_match($patron, $string) -> 1 ou 0
 * @patron: delimitado por /, #, < ...
 */
$unString = "Hola que tal estas?";
var_dump(preg_match("/hola/", $unString));
// CASE INSENSITIVE
var_dump(preg_match("/hola/i", $unString));
echo "\n";

/**
 * ===============================================
 * EXTREMOS DUN STRING
 * ===============================================
 */

// Atopar patron ao principio: ^...
function esCalle(string $direccion): void
{
    if (preg_match("/^Calle/", $direccion)) {
        echo "$direccion e una calle\n";
    } else {
        echo "$direccion non e una calle\n";
    }
}
$direccion = "Calle Cuéllar";
esCalle($direccion);
$direccion = "Avenida Cuéllar";
esCalle($direccion);
echo "\n";

// Atopar patron ao final: ...$
$cadena = "Esto es un saludo: hola";
echo preg_match("/hola$/", $cadena) ?
    "hola está al final de la cadena\n" : "hola no está al final de la cadena\n";
echo "\n";

// Ter en conta saltos de línea: /m
$direccion = "Calle Cuéllar\nCalle Augusta";
echo "Modificador /m:\n";
echo  preg_match_all("/^calle/i",$direccion) . "\n";
echo  preg_match_all("/^calle/im",$direccion) . "\n";
echo "\n";

/**
 * ===============================================
 * METACHARACTERS
 * ===============================================
 */

echo "Escapalos: \:\n";
$string = "3^4";
echo preg_match("/3\^4/", $string) . "\n";
echo "\n";

/* [] -> clase */
echo "Clases:\n";
$string = "hola";
echo preg_match("/h[aeiou]la/", $string) . "\n";

// ^ para negar (solo ao principio)
$string = "123456789";
preg_match_all("/[^13579]/", $string, $matches); // $matches: array co encontrado
echo "Números pares de $string:\n";
print_r($matches);
echo "\n";

// Filtrar vocales
$string = "Non coller vogais"; //Importante, se non queres contar o espazo engadilo
echo "Consonantes en \"$string\": ". preg_match_all("/[^aeiou ]/", $string) . "\n";

// Filtrar caracteres Metacaracter [-]
$string = "NON coller MAIÚSCULAS solo minúsculas";
echo "\"$string\" sin maiúsculas: " . preg_match_all("/[^A-Z]/", $string) . "\n";

//Filtrar letras
$string = "Non contar caracteres alfabéticos e espacios 31";
echo "Caracteres no alfabéticos en \"$string\"" . preg_match_all("/[^A-z ]/", $string) . "\n";

//Filtrar números
$string = "123456789";
preg_match_all("/[1-3]/", $string, $matches);
echo "Números do 1 ao 3 en \"$string\":\n";
print_r($matches[0]);

/* . -> coincide con cualquier caracter */
$string = "&\nasd^R\nL";
echo "\nMetacaracter .\n";
echo preg_match_all("/./", $string, $matches) . "\n"; // todos os caracteres menos \n
echo preg_match_all("//", $string, $matches) . "\n"; // todos os caracteres + 1
echo preg_match_all("/\s/", $string) . "\n"; // Saltos de línea
echo "\n";
/*
 - * -> 0 ou mais ocurrencias do caracter que precede
 - + -> 1 ou mais ocurrencias do caracter que precede
 - ? -> 0 ou 1 ocurrencias do caracter que precede
 */

$string1 = "hla";
$string2 = "hola";
$string3 = "hooooooooola";
echo "Cadena ho*la en $string1: " . preg_match_all("/ho*la/", $string1) . "\n";
echo "Cadena ho+la en $string1: " . preg_match_all("/ho+la/", $string1) . "\n";
echo "Cadena ho?la en $string1: " . preg_match_all("/ho?la/", $string1) . "\n";
echo "\n";
echo "Cadena ho*la en $string2: " . preg_match_all("/ho*la/", $string2) . "\n";
echo "Cadena ho+la en $string2: " . preg_match_all("/ho+la/", $string2) . "\n";
echo "Cadena ho?la en $string2: " . preg_match_all("/ho?la/", $string2) . "\n";
echo "\n";
echo "Cadena ho*la en $string3: " . preg_match_all("/ho*la/", $string3) . "\n";
echo "Cadena ho+la en $string3: " . preg_match_all("/ho+la/", $string3) . "\n";
echo "Cadena ho?la en $string3: " . preg_match_all("/ho?la/", $string3) . "\n";
echo "\n";

/* {} -> número exacto do caracter ou grupo que o precede */
$string4 = "hoooola";
echo "Cadena ho{4}la en $string4: " . preg_match_all("/ho{4}la/", $string4) . "\n"; //Numero exacto
echo "Cadena ho{3,6}la en $string4: " . preg_match_all("/ho{3,6}la/", $string4) . "\n"; //En el rango
echo "Cadena ho{3,}la en $string4: " . preg_match_all("/ho{3,}la/", $string4) . "\n"; //Como mínimo
echo "\n";

/* () -> sub patrons dentro de patron */
$string1 = "Llegare pronto que voy volando";
$string2 = "Llegare pronto que voy andando";
$string3 = "Llegare pronto que voy andando y volando";
echo "Contador de volando/andando:\n";
echo "En $string1: " . preg_match_all("/(and|vol)ando/",$string1) . "\n";
echo "En $string2: " . preg_match_all("/(and|vol)ando/",$string2) . "\n";
echo "En $string3: " . preg_match_all("/(and|vol)ando/",$string3,$matches) . "\n";
print_r($matches);
echo "\n\n";

/**
 * ===============================================
 * SECUENCIAS ESPECIAIS
 * ===============================================
 */

$string = "abc123<>"; // \W alfanuméricos \d dígitos \S espacios

echo "Números en $string: " . preg_match_all("/\d/", $string) . "\n";

/**
 * ===============================================
 * FUNCIÓNS
 * ===============================================
 */

/* preg_replace */
$string = "Vamos a reemplazar la palabra coche";
$cambio = preg_replace("/coche/", "moto", $string);
echo $cambio . "\n";

$string = "Vamos a cambiar el animal perro de color verde";
$patrones = ["/perro/", "/verde/"];
$sustituciones = ["gato", "azul"];
echo preg_replace($patrones, $sustituciones, $string) . "\n";
