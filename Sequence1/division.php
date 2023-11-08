<?php

$line[0] = readline("Entrez le nombre 1: ");
readline_add_history($line[0]);
$line[1] = readline("Entrez le nombre 2: ");
readline_add_history($line[1]);


$result = @number_format($line[0] / $line[1], 2, '.', '');

echo "Le résultat de la division est: ".$result."\n";