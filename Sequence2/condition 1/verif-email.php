<?php

$email = readline("Saisissez une adresse mail : ");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "l'adresse $email est valide";
} else {
    echo "l'adresse $email est invalide";
}