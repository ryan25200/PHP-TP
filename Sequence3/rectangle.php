<?php

$l = readline("Largeur du rectangle : ");
$h = readline("Hauteur du rectangle : ");

for ($i=0; $i<$h; $i++) {
    echo PHP_EOL;
    for ($j=0; $j<$l; $j++) {
        echo "* ";
    }
}