<?php

$notes = [10, 12, 5, 14, 7, 15, 9.5, 8];

$noteLaPlusHaute = 0;

foreach ($notes as $note) {
    if ($note > $noteLaPlusHaute) {
        $noteLaPlusHaute = $note;
    }
};

echo PHP_EOL;
echo "la note la plus haute est : " . $noteLaPlusHaute;
echo PHP_EOL;
echo "la note la plus haute est : " . max($notes);