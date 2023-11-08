<?php

$temperature = readline("Entrez une température : ");
$format = readline("choisir l'échelle de la température entrée (C = Celsius ou F = Fahrenheit) : ");

$farheneit = "F";
$celsius = "C";

while ($format == $farheneit || $format == $celsius) {
    if ($format == $farheneit) {
        echo PHP_EOL;
        echo "La température est de : " . (int)$temperature * (9/5) + 32 . "°$farheneit";
        break;
    } elseif ($format == $celsius) {
        echo PHP_EOL;
        echo "La température est de : " . (int)($temperature - 32) * (5 / 9) . "°$celsius";
        break;
    }
    echo "Entrez une valeur en celsius ou farheneit !";
}