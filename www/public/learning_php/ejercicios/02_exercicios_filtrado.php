<?php
/**
 * 1. Crea un script que reciba varios textos con etiquetas
 * HTML y código potencialmente malicioso. Objetivo:
 *
 * Sanitizar las cadenas eliminando las etiquetas.
 * Mostrar el original y el sanitizado.
 */

function sanitizeHtml(...$texts)
{
    foreach ($texts as $text) {
        echo "Original: $text\n";
        echo "Sanitizado: " . filter_var($text, FILTER_SANITIZE_STRING) . "\n";
    }
}
echo "=== Ejercicio 1 ===\n";
sanitizeHtml("<b>Hola</b> mundo", "<script>alert('hack');</script> Bienvenido", "<h1>Título</h1> con <a href='#'>link</a>");
echo "\n\n";

/**
 * 2. Pide al usuario que introduzca un número (puede venir como string)
 * y valida si es un entero válido. Comprueba los siguientes valores:
 */
$listaValores = ["123", "0", "abc", -5];

function validarNumero(array $listaValores) : void
{
    foreach ($listaValores as $valor) {
        if(filter_var($valor, FILTER_VALIDATE_INT) === 0 ||
            !filter_var($valor, FILTER_VALIDATE_INT) === false) {
            echo "$valor e un enteiro valido\n";
        } else {
            echo "$valor non e un enteiro valido\n";
        }
    }
}
echo "=== Ejercicio 2 ===\n";
print_r(validarNumero($listaValores));
echo "\n\n";

/**
 * 3. Crea una lista de posibles IPs y valida cuáles son correctas y cuáles no.
 *
 * Incluye casos como:
 *
 * 192.168.1.1
 * 256.100.50.25
 * 127.0.0.1
 * ::1 (IPv6 válida)
 * 127.0.0.999
 */

function validarIp(array $listaIps) : void
{
    foreach ($listaIps as $ip) {
        if(!filter_var($ip, FILTER_VALIDATE_IP) === false ) {
            echo "$ip e unha IP valida\n";
        } else {
            echo "$ip non e unha IP valida\n";
        }
    }
}

echo "=== Ejercicio 3 ===\n";
print_r(validarIp(["192.168.1.1", "256.100.50.25", "127.0.0.1", "::1", "127.0.0.999"]));
echo "\n\n";

/**
 * 4. Dado un array de emails con errores comunes:
 * Sanitizar primero y luego validar.
 * Imprimir una tabla con columnas: original – sanitizado – válido (sí/no).
 */

$emails = [
    "usuario<script>@gmail.com",
    "correo@@empresa.com",
    "nombre con espacios@correo.com",
    "normal@email.com"
];

function validarEmails(array $listaEmails) : void
{
    foreach ($listaEmails as $email) {
        $sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $valido = filter_var($sanitizado, FILTER_VALIDATE_EMAIL);
        echo "Original: $email\n";
        echo "Sanitizado: $sanitizado\n";
        echo "Valido: " . ($valido ? "SI" : "NO") . "\n\n";
    }
}

echo "=== Ejercicio 4 ===\n";
validarEmails($emails);
echo "\n\n";

/**
 * 5. Crea un array con URLs sospechosas:
 *
 * Objetivo:
 *
 * Sanitizar y validar.
 * Marcar las que son correctas.
 */

$listaUrls = [
  "http://mi sitio.com/test page",
  "https://ejemplo.com/\nmal",
  "https://google.com"
 ];

function validarURL(array $listaUrls)
{
    foreach ($listaUrls as $url) {
        $sanitizado = filter_var($url, FILTER_SANITIZE_URL);
        $valido = filter_var($sanitizado, FILTER_VALIDATE_URL);
        echo "Original: $url\n";
        echo "Sanitizado: $sanitizado\n";
        echo "Valido: " . ($valido ? "SI" : "NO") . "\n\n";
    }
}

echo "=== Ejercicio 5 ===\n";
echo validarURL($listaUrls);
echo "\n\n";

/**
 * 6. Solicita al usuario un número del 1 al 10.Objetivo:
 * Mostrar si está dentro del rango o no.
 */

$valores = [0, 5, 10, 11, -3];

function enRango(array $listaValores)
{
    $min = 1;
    $max = 10;

    foreach ($listaValores as $valor) {
        $validado = filter_var($valor,
        FILTER_VALIDATE_INT,
        array("options" => array("min_range" => $min, "max_range" => $max))
        );
        if($validado !== false) {
            echo "El valor $valor esta dentro del rango [$min - $max]\n";
        } else {
            echo "El valor $valor no esta dentro del rango [$min - $max]\n";
        }
    }
}

echo "=== Ejercicio 6 ===\n";
enRango($valores);
echo "\n\n";