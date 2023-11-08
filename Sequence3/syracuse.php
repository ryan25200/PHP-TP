<?php

$syracuse = 15;

for ($n = 1; $n <=20; $n++) {
    echo "$syracuse ";
    if ($syracuse %2==0) {
        $syracuse = $syracuse / 2;
    } else {
        $syracuse = $syracuse * 3 + 1;
    }
}