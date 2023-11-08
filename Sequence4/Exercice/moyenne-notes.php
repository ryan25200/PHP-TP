<?php

$notes = [10, 12, 5, 14, 7, 15, 9.5, 8];

foreach ($notes as $note) {
    echo $note . "|";
}

echo PHP_EOL;
$calcul =  array_sum($notes)/count($notes);
print_r(round($calcul, 2));

// afficher une appréciation en fonction des règles suivantes :

if ($calcul < 10) {
    echo "Vous n'avez pas votre diplôme";
} elseif ($calcul > 10 && $calcul < 12) {
    echo PHP_EOL;
    echo "Mention passable";
}elseif ($calcul > 12 && $calcul < 14) {
    echo PHP_EOL;
    echo "Mention assez bien";
}elseif ($calcul > 14 && $calcul < 16) {
    echo PHP_EOL;
    echo "Mention bien";
}elseif ($calcul >= 16) {
    echo PHP_EOL;
    echo "Mention très bien";
}