<?php

$fondRouge = "\033[41m";
$normal = "\033[0m";

$prix = readline("Quel est le prix de l'article : ");

$remise5 = ($prix) * 5 / 100;
$remise10 = ($prix) * 10 / 100;
$remise20 = ($prix) * 20 / 100;

if ($prix < 1000) {
    echo 'La remise est de 5% soit ' . $fondRouge . $remise5 . $normal . ' euros sur le prix de l\'article';
    echo PHP_EOL;
    echo 'Le montant de l\'article après remise est de ' . $fondRouge . ($prix - $remise5) . $normal . ' euros';
} elseif ($prix >= 1000 && $prix < 5000) {
    echo 'La remise est de 10% soit ' . $fondRouge . $remise10 . $normal . ' euros sur le prix de l\'article';
    echo PHP_EOL;
    echo 'Le montant de l\'article après remise est de ' . $fondRouge . ($prix - $remise10) . $normal . ' euros';
} elseif ($prix > 5000) {
    echo 'La remise est de 20% soit ' . $fondRouge . $remise20 . $normal . ' euros sur le prix de l\'article';
    echo PHP_EOL;
    echo 'Le montant de l\'article après remise est de ' . $fondRouge . ($prix - $remise20) . $normal . ' euros';
}