<?php

$départ = readline("Entrez l'adresse de point de départ : ");
$arrivée = readline("Entrez l'adresse du point d'arrivée : ");

$solde = readline("Saisissez votre solde en euros : ");
$avoir = readline("Saisissez le montant de votre avoir : ");

if (strpos($départ, '75000 Paris') !== false && strpos($arrivée, '75000 Paris') === false) {
    $montant = 50;
    if ($solde + $avoir >= $montant) {
        $nouveauSolde = $solde + $avoir - $montant;
        echo "Trajet de Paris vers Colombes pour un montant de 50€\n";
        echo "Votre nouveau solde est de ".$nouveauSolde."€ et votre nouvel avoir est de 0€\n";
    } else {
        echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde\n";
    }
} elseif (strpos($départ, '75000 Paris') !== false) {
    $montant = 30;
    if ($solde >= $montant) {
        $nouveauSolde = $solde - $montant;
        echo "Trajet de Paris intra-muros pour un montant de 30€\n";
        echo "Votre nouveau solde est de ".$nouveauSolde."€ et votre nouvel avoir est de ".$avoir."€\n";
    } else {
        echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde\n";
    }
} elseif (strpos($arrivée, '75000 Paris') !== false) {
    $montant = 40;
    if ($solde + 0.5 * $avoir >= $montant) {
        $nouveauSolde = $solde + 0.5 * $avoir - $montant;
        echo "Trajet vers Paris pour un montant de 40€\n";
        echo "Votre nouveau solde est de ".$nouveauSolde."€ et votre nouvel avoir est de ".(0.5 * $avoir)."€\n";
    } else {
        echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde\n";
    }
} else {
    echo "Désolé mais les trajets hors Paris ne sont pas proposés par notre société\n";
}

?>