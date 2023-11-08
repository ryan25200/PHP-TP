<?php

$eau = number_format(1.20, 2);
$soda = number_format(3.10, 2);
$café = number_format(2.00, 2);

echo "1. Eau : " . $eau . "€";
echo PHP_EOL;
echo "2. Soda : " . $soda . "€";
echo PHP_EOL;
echo "3. Café : " . $café . "€";
echo PHP_EOL;

$choixBoisson = readline("Choisissez votre boisson : ");

while ($choixBoisson < 1 || $choixBoisson > 3) {
    echo "Le choix est incorrect !";
    echo PHP_EOL;
    $choixBoisson = readline("Choisissez votre boisson : ");
}

if ($choixBoisson == 1) {
    $prix = $eau;
} elseif ($choixBoisson == 2) {
    $prix = $soda;
} elseif ($choixBoisson == 3) {
    $prix = $café;
}

// ----------------------------- Paiement ----------------------------

$insérerArgent = readline("insérer des pièces dans le distributeur : ");

while ($insérerArgent < $prix) {
    $reste = $prix - $insérerArgent;
    echo "Il vous reste à payer : " . $reste . "€";
    echo PHP_EOL;
    $insérerArgent += readline("insérer des pièces dans le distributeur : ");
}

if ($insérerArgent > $prix) {
    $reste = $insérerArgent - $prix;
    echo "Voici votre monnaie : " . $reste . "€";
}
?>