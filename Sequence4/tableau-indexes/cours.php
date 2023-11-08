<?php

// déclaration et initialisation d'un tableau de notes

$notes = [10, 12, 9, 13, 7];

// Afficher les éléments du tableau (tableau)

echo $notes[0]; // 10
echo $notes[1]; // 12
echo $notes[2]; // 9

// afficher les éléments du tableau avec une boucle for

echo PHP_EOL;

for($i=0; $i < count($notes); $i++) {
    echo $notes[$i] . "|";
}

echo PHP_EOL;

// afficher les éléments du tableau avec une boucle foreach

foreach ($notes as $note) {
    echo $note . "|";
}

//afficher les éléments avec leur index avec une boucle for

echo PHP_EOL;

for($i=0; $i < count($notes); $i++) {
    echo "$i:$notes[$i]" . "|";
}

// afficher les éléments avec leur index avec une boucle foreach

echo PHP_EOL;

foreach ($notes as $index => $note) {
    echo "$index:$note" . "|";
}

// ajouter une nouvelle note dans le talbeau

$notes[] = 15;

// affichage en mode "DEBUG"

echo PHP_EOL;

print_r($notes);

// ajouter plusieurs notes dans le tableau

array_push($notes, 15,12,8,9,12.5);
print_r($notes);