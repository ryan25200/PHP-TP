<?php
$str = readline("Saisir une chaîne de caractères: ");
$i = strlen($str) - 1;
while ($i >= 0) {
    echo substr($str, $i, 1);
    $i--;
}
echo "\n";
