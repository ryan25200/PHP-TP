<?php

$impression = readline("Quelle quantité d'impression a été réalisée ? ");

if ($impression <= 10) {
    $facture = $impression * 0.3;
} elseif ($impression <= 30) {
    $facture = 10 * 0.3 + ($impression - 10) * 0.25;
} else {
    $facture = 10 * 0.3 + 20 * 0.25 + ($impression - 30) * 0.2;
}

if ($facture > 50) {
    $facture *= 0.9;
}

echo "Votre facture s'élève à un montant de " . $facture . "€";