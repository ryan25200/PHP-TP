<?php

$demande = readline("Saisissez un horaire : ");

$heure = date('Gi');

if ($heure >= 900 && $heure < 1900) {
    echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermée";
}