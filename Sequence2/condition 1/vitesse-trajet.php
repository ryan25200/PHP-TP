


<?php
// Demande à l'utilisateur de saisir une distance
$distance = readline("Veuillez entrer la distance en kilomètres : ");

// Demande à l'utilisateur de saisir une durée
$duree = readline("Veuillez entrer la durée sous le format (heures/minutes) : ");

// Définir l'heure et la minute
$heure = substr($duree, 0, 1);
$minute = substr($duree,2, 4);
$vitesse = ceil($distance/($heure+$minute/60));

if ($minute > 60) {
    echo "la valeur . $minute . est supérieur à 60 ";
} else {
    if ($vitesse <= 90) {
        echo "La vitesse du trajet est en dessous ou égale à 90 km/h.\n";
    } else {
        echo "La vitesse du trajet est au-dessus de 90 km/h.\n";
    }

}

