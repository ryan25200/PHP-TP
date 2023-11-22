<?php

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$choixEquipes = ucfirst(readline("Saisir une équipe : "));

foreach ($equipes as $equipe) {
    if ($choixEquipes == $equipe) {
        echo "l'Equipe qui sera présente à la coupe du monde sera : $equipe";
        echo PHP_EOL;
    }
}

// =========================================================================================================

