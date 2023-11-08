<?php

// Fonction pour générer un nombre aléatoire entre 1 et 100
function nombreAleatoire() {
    return rand(1, 100);
}

// Fonction pour gérer une partie
function jouerPartie($maxEssais) {
    $nombreSecret = nombreAleatoire();
    $essais = 1;

    echo "Bienvenue dans le jeu du nombre à deviner !";
    echo PHP_EOL;
    echo "Le nombre secret a été généré. Vous avez $maxEssais tentatives pour le trouver.";
    echo PHP_EOL;

    while ($essais < $maxEssais) {

        $essai = (int)readline("Tentative $essais : Entrez un nombre entre 1 et 100 : ");

        if ($essai < 1 || $essai > 100) {
            echo "Le nombre doit être compris entre 1 et 100. Réessayez.";
            echo PHP_EOL;
            continue;
        }

        if ($essai === $nombreSecret) {
            echo "Bravo ! Vous avez trouvé le nombre secret en $essais essais !";
            echo PHP_EOL;
            return true;
        } elseif ($essai < $nombreSecret) {
            echo "Le nombre est trop petit.";
            echo PHP_EOL;
            $essais++;
        } else {
            echo "Le nombre est trop grand.";
            echo PHP_EOL;
            $essais++;
        }
    }

    echo "Désolé, vous avez atteint le nombre maximum d'essais. Le nombre secret était $nombreSecret.";
    echo PHP_EOL;
    return false;
}

// Fonction pour enregistrer les résultats dans un fichier
function enregistrerResultat($joueur, $resultat) {
    $date = date('d/m/Y H:i:s');
    $donnee = "$date - Pseudo: $joueur - Résultat: $resultat";
    echo PHP_EOL;
    $h = fopen('resultats.txt', 'a');
    fwrite($h, $donnee);
    fclose($h);
}

// Fonction pour afficher les résultats d'un jour donné
function afficherResultatsPourDate($dateRecherche) {
    $fichier = file('resultats.txt');

    foreach ($fichier as $ligne) {
        if (strpos($ligne, $dateRecherche) !== false) {
            echo $ligne;
        }
    }
}

// Fonction pour afficher les résultats d'un joueur donné
function afficherResultatsPourJoueur($joueurRecherche) {
    $fichier = file('resultats.txt');

    foreach ($fichier as $ligne) {
        if (strpos($ligne, "Pseudo: $joueurRecherche") !== false) {
            echo $ligne;
        }
    }
}

// Menu principal
while (true) {
    echo PHP_EOL;
    echo PHP_EOL;
    echo "MENU :";
    echo PHP_EOL;
    echo "1. Nouvelle partie";
    echo PHP_EOL;
    echo "2. Visualiser le contenu du fichier resultats.txt";
    echo PHP_EOL;
    echo "3. Visualiser les résultats d'un jour donné";
    echo PHP_EOL;
    echo "4. Visualiser les résultats d'un joueur donné";
    echo PHP_EOL;
    echo "5. Quitter";

    echo PHP_EOL;
    $choix = (int)readline("Choisissez une option : ");
    echo PHP_EOL;

    if ($choix === 1) {
        $nomJoueur = readline("Entrez votre pseudo : ");
        $maxEssais = rand(10, 15);
        $resultat = jouerPartie($maxEssais) ? 'Excellent! Vous avez trouvé le nombre' : 'Perdu! Le nombre à deviner était ' . $nombreSecret;
        enregistrerResultat($nomJoueur, $resultat);
    } elseif ($choix === 2) {
        $handle = fopen('resultat.txt', 'r');
        if ($handle) {
            while (($ligne = fgets($handle)) !== false) { 
                echo $ligne;
            }
            fclose($handle);
        } else {
            echo "Erreur lors de l'ouverture du fichier !";
        }
    } elseif ($choix === 3) {
        $dateRecherche = readline("Entrez la date au format d/m/Y : ");
        echo "Résultats pour la date $dateRecherche :";
        echo PHP_EOL;
        echo PHP_EOL;
        afficherResultatsPourDate($dateRecherche);


        // Code pour rechercher et afficher les résultats pour une date donnée
    } elseif ($choix === 4) {
        $joueurRecherche = readline("Entrez le pseudo du joueur : ");
        echo "Résultats pour le joueur $joueurRecherche :";
        echo PHP_EOL;
        echo PHP_EOL;
        afficherResultatsPourJoueur($joueurRecherche);


        // Code pour rechercher et afficher les résultats pour un joueur donné
    } elseif ($choix === 5) {
        break;
    } else {
        echo "Option invalide. Réessayez.";
        echo PHP_EOL;
    }
}