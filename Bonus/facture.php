<?php

$tarifsAppels = 0.15;
$tarifsSms = 0.02;
$tarifsData = 0.3;

$appels = readline("Combien de minutes avait vous utilisée ? ");
$sms = readline("Combien de SMS avait vous envoyés ? ");
$data = readline("Combien de Gigaoctets avait vous consommés ? ");

$Total = $tarifsAppels * $appels + $tarifsSms * $sms + $tarifsData * $data;


while ($appels < 0 || $sms < 0 || $data < 0) {
    echo("Il est impossible d'entrée un nombre négatif");
}
echo ("$Total");