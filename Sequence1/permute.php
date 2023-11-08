<?php

$line[0] = readline("Entrez le nombre 1: ");
readline_add_history($line[0]);
$line[1] = readline("Entrez le nombre 2: ");
readline_add_history($line[1]);

list($line[0], $line[1]) = array($line[1], $line[0]);

echo "Permutation:\n";
echo "Nombre 1: ".$line[0]."\n";
echo "Nombre 2: ".$line[1]."\n";
?>
