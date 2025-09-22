<?php
$variable = "esto e unha variable\n"; //variable global

function unhaFuncion() : void
{
    //Metodo 1 para usar variables globais nun scope
    global $variable;
    echo $variable;
    //Metodo 2 (RECOMENDADO) para usar variables globais nun scope
    echo $GLOBALS['variable'];
}

function test(): void
{
    //Garda o valor de unha variable, cada vez que se chama suma 1
    static $x = 0;
    echo $x;
    $x++;
}

unhaFuncion();
echo "\n";
test();
echo "\n";
test();
echo "\n";

// CONSTANTES
const UNHA_CONSTANTE = "esto e unha constante\n";
define("OUTRA_CONSTANTE", 10); //Sintaxe valida en scope local
echo UNHA_CONSTANTE;
echo "\n";
var_dump(OUTRA_CONSTANTE);
echo "\n";
// Exemplo de definición de constante en scope local
function outraFuncion(): void
{
    define("URL","WWW");
    echo URL;
    echo "\n";
    echo OUTRA_CONSTANTE;
}

outraFuncion();
