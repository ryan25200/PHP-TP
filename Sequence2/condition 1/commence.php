<?php

// demander la saisie d'un mot et ensuite afficher si le mot commence par la lettre P

$mot = readline("Entrez un mot : ");
$mot = strtolower($mot);


if (str_starts_with($mot, 'p')) {
    echo "le mot $mot commence par p";
    echo PHP_EOL;
} else {
    echo "le mot $mot ne commence pas par p";
    echo PHP_EOL;
}

// affiche si le mot contient au moins 5 caractères

if ($mot) {
    strlen($mot) >= 5;
    echo "il y a 5 caractères ou plus";
} else {
    strlen($mot) <= 5;
    echo "il y a moins de 5 caractères";
}



