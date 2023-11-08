<?php

$prixHT = readline("Entrez le prix HT : ");
$TVA = readline("Saisissez le taux de TVA (en pourcentage) : ");

$resultat = $prixHT*(1+($TVA/100));

echo "Le prix TTC est de : " . round($resultat, 2);