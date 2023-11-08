<?php

$largeur = readline("Largeur du rectangle : ");  // Largeur du rectangle
$hauteur = readline("Hauteur du rectangle : ");   // Hauteur du rectangle

// Boucle pour les lignes (hauteur)
for ($i = 0; $i < $hauteur; $i++) {

    // Boucle pour les colonnes (largeur)
    for ($j = 0; $j < $largeur; $j++) {
        echo "* ";
    }

    // Passer à la ligne suivante une fois que tous les caractères de la ligne ont été imprimés
    echo PHP_EOL;
}