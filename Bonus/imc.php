<?php

$poids = readline("Combien de KG faite vous ? ");
$taille = readline("Quel taille faite vous (en mètres) ? ");

$calcul = $poids/$taille**2;

while ($poids < 0 || $taille < 0) {
    echo("Il est impossible d'entrée un nombre négatif");
}
echo PHP_EOL;
echo round($calcul, 2);