<?php

$defNombre = readline("Veuillez entrer un nombre : ");

for ($nombre = 0; $nombre <= $defNombre; $nombre+=2) {
    echo $nombre . " ";
}