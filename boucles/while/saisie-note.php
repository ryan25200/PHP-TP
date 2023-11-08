<?php

$texte = readline("Saisissez une note entre 0 et 20 : ");

while ($texte > 20) {
    echo "La note saisie est incorrecte";
    echo PHP_EOL;
    $texte = readline("Saisissez une note entre 0 et 20 : ");
}
echo "La note saisie est correcte";

// demander à l'utilisateur de saisir une note entre 0 et 20

echo PHP_EOL;

while ($texte > 20 || $texte <0) {
    echo "La note saisie doit être comprise entre 0 et 20 !";
    echo PHP_EOL;
    $texte = readline("Saisissez une note entre 0 et 20 : ");
}
echo "La note saisie est correcte";