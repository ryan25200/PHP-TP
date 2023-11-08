<?php
// Lit 3 commandes de l'utilisateur
$line[0] = readline("Entrez le nombre 1: ");
readline_add_history($line[0]);
$line[1] = readline("Entrez le nombre 2: ");
readline_add_history($line[1]);
$line[2] = readline("Entrez le nombre 3: ");
readline_add_history($line[2]);

// Trouve le plus grand nombre
$max = max($line);

echo "Le plus grand nombre est: ".$max."\n";
?>