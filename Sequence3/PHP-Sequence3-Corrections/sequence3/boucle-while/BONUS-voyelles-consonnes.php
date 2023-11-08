<?php
$str = readline("Saisir une phrase: ");
$str = strtolower($str);
$voyelles = "aeiouy";
$nbVoyelles = 0;
$nbConsonnes = 0;
$i = 0;

while ($i < strlen($str)) {
    if (ctype_alpha($str[$i])) {
        if (str_contains($voyelles, $str[$i])) {
            $nbVoyelles++;
        } else {
            $nbConsonnes++;
        }
    }
    $i++;
}
echo "Nombre de voyelles: $nbVoyelles\n";
echo "Nombre de consonnes: $nbConsonnes\n";

