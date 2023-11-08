<?php

$date = date("D");
if ($date == "Mon" || "Tue" || "Wed" || "Thu" || "Fri") {
    echo "Je vous souhaite un bonne journée";
} elseif ($date == "Sun") {
    echo "Je vous souhaite un bon week-end";
} elseif ($date == "Sat") {
    echo "Je vous souhaite un bon dimanche";
}