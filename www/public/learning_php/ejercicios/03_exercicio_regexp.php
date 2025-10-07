<?php
/**
 * EJERCICIO 4
 * Extraer todos los numeros de una cadena
 */

function extraerNumeros(string $texto)
{
    preg_match_all("/\d+/", $texto, $matches);
    print_r($matches[0]);
}

extraerNumeros("Tengo 2 perros y 3 gatos");
echo "\n\n";

/**
 * EJERCICIO 5
 * Comprobar si un correo es valido
 */

function validarEmail(array $listaEmails)
{

    foreach ($listaEmails as $email) {
        echo preg_match("/^[\w\.-]+@[\w\.-]+\.[A-z]{2,3}$/", $email) ? "$email VALIDO\n" : "$email NON VALIDO\n";
    }
}

validarEmail(["test@gmail.com", "badmail@", "otro.do_1@dominio.es", "ola@mal", "outr@mal.malmal", "outr@mal.edu.xunta.gal"]);
echo "\n\n";

/**
 * EJERCICIO 6
 * Validar formato de fecha DD/MM/AAAA
 */

function validarFecha(string $fecha){
    echo preg_match("/^(0[1-9]|[1-2][0-9]|3[01])[\/\-](0[1-9]|1[0-2])[\/\-][0-9]{4}$/", $fecha) ? "$fecha VALIDO\n" : "$fecha NON VALIDO\n";
}

validarFecha("21/04/2023");
echo "\n\n";

/**
 * EJERCICIO 7
 * Substituir multiples espacios por un solo
 */

function substituirEspacios(string $texto){
    echo "Original: $texto" . "\n";
    echo "Cortado: " . preg_replace("/\s+/", " ", $texto) . "\n";
}

substituirEspacios("Hola           que tal        estas");
echo "\n\n";

/**
 * EJERCICIO 8
 * Validar un numero de teléfono español (9 digitos y empieza por 6,7,8 o 9).
 */

function validarTelefonoEspanol(string $telefono){
    echo preg_match("/^[6-9]\d{8}$/", $telefono) ? "$telefono TELEFONO ESPAÑOL VALIDO\n" : "$telefono TELEFONO ESPAÑOL NON VALIDO\n";
}

validarTelefonoEspanol("612345678");
echo "\n\n";

/**
 * EJERCICIO 9
 * Extraer todas as palabras que empezan por maiuscula
 */

function extraerPalabrasMayusculas(string $texto){
    preg_match_all("/\b[A-Z][A-z]*\b/", $texto, $matches);
    print_r($matches[0]);
}

extraerPalabrasMayusculas("Hola Mundo desde PHP");

echo "\n\n";

/**
 * EJERCICIO 10
 * Validar una contraseña segura (Ej: Abc123$%)
 * (8 caracteres, al menos 1 mayuscula, 1 minuscula, 1 numero y 1 caracter especial)
 */

function validarPassword(string $password){
    echo preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W).{8,}$/",$password) ? "$password VALIDA\n" : "$password NON VALIDA\n";
}

validarPassword("Abc123$%");
