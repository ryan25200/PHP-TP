<?php

// affiche tous les nombres pairs de 0 à 100

$nombre = 0;

while ($nombre <= 100) {
    echo $nombre . ' ';
    $nombre = $nombre+2;
}
echo PHP_EOL;
echo PHP_EOL;

// affiche tous les nombres pairs de 0 à (nombre défini par l'utilisateur)

$nombre = 0;
$texte = readline("Saisissez un nombre : ");

while ($nombre <= $texte) {
    echo $nombre . ' ';
    $nombre = $nombre+2;
}

echo PHP_EOL;
echo PHP_EOL;

// affiche tous les nombres pairs de 0 à (nombre défini par l'utilisateur)

$nombre = 0;
$texte = readline("Saisissez un nombre : ");

while ($nombre <= $texte) {
    echo $nombre . ' ';
    $nombre = $nombre + $texte += 2;
}