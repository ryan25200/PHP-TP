<?php

$date = date('d-m-Y', time());
$date = date('h:i', time());

if (date('H' < 13 )) {
    echo "Je vous souhaite une bonne matinée";
} else {
    echo "Je vous souhaite un bon après-midi";
}

?>