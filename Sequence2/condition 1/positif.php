<?php

// demander la saisie d'un nombre à l'utilisateur ensuite afficher si le nombre est positif ou négatif (supérieur ou égal à 0)


$nombre = readline("Veuillez entrer un nombre : ");

    if ($nombre >= 0) {
        echo "Le nombre $nombre est positif.";
    } else {
        echo "Le nombre $nombre est négatif.";
    }