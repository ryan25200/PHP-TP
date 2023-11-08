<?php

$nombreUtilisateur = readline("Saisir un nombre : ");
for ($nombre=0; $nombre <= $nombreUtilisateur ; $nombre++) {
    if ($nombre % 2 == 0) {
        echo $nombre . ' ';
    }
}