<?php

$n = 15; // Choisissez le nombre initial
$nbTermes = 20; // Nombre de termes à générer

echo "Les $nbTermes premiers termes de la suite de Syracuse pour N=$n sont : " . PHP_EOL;

// Boucle pour générer les termes de la suite
for ($i = 0; $i < $nbTermes; $i++) {
    echo $n . " ";

    // Application des règles de la suite de Syracuse
    if ($n % 2 == 0) {
        $n = $n / 2;
    } else {
        $n = 3 * $n + 1;
    }
}

echo PHP_EOL;


