<?php

$livres = "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2";

// 1. Afficher la liste des livres

// $livre = "Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2";
// explode(":", $livre);

// utiliser la fonction explode

$livreTab = explode(":", $livres);

foreach ($livreTab as $info) {
    echo "$info ";
}
echo PHP_EOL;

list($titre, $auteur, $annee, $genre, $isbn) = explode(":", $livres);

echo "$titre $auteur $annee $genre $isbn";
echo PHP_EOL;

// utiliser le destructuring de tableau à partir de PHP 7.1

[$titre, $auteur, $annee, $genre, $isbn] = explode(":", $livres);
echo "$titre, $auteur, $annee, $genre, $isbn";
echo PHP_EOL;

// afficher le titre et l'année de livre

$livreTab = explode(":", $livres);
echo "$livreTab[0] $livreTab[2]";
echo PHP_EOL;

// afficher le titre et l'année de livre avec la fonction list

list($titre,,$annee) = explode(":", $livres);
echo "$titre $annee";
echo PHP_EOL;

// afficher le titre et l'année avec le destructuring

[$titre,,$annee] = explode(":", $livres);
echo "$titre $annee";
echo PHP_EOL;

// afficher l'auteur du livre

[,$auteur] = explode(":", $livres);
echo $auteur;
echo PHP_EOL;

// afficher l'ISBN du livre

[,,,,$isbn] = explode(":", $livres);
echo $isbn;
echo PHP_EOL;