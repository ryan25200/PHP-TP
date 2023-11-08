<?php

$a = readline("Entrer le coefficient a : ");
$b = readline("Entrer le coefficient b : ");
$c = readline("Entrer le coefficient c : ");
echo PHP_EOL;
# echo 'Résolution de l\'équation ' . $a**2+$b+$c;

$delta = ($b**2)-(4*$a*$c);
echo $delta;

if ($delta > 0) {
    $solution1 = -$b-sqrt($delta)/2*$a;
    $solution2 = -$b+sqrt($delta)/2*$a;

    echo PHP_EOL;
    echo "Il y a 2 solution distincte :";
    echo PHP_EOL;
    echo "$solution1";
    echo PHP_EOL;
    echo "$solution2";

} elseif ($delta = 0) {
    $solution1 = -$b-sqrt($delta)/2*$a;

    echo PHP_EOL;
    echo "Il y a une solution réelle :";
    echo PHP_EOL;
    echo "$solution1";

} else {
    echo PHP_EOL;
    echo "il n'y a aucune solution";
}