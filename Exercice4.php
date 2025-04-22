<?php
// Exercice 1
$age = 17;
if ($age >= 18) {
    echo "Majeur";
} else {
    echo "Mineur";
}

// Exercice 2
$nombre = 5;
if ($nombre > 0) {
    echo "Positif";
} elseif ($nombre < 0) {
    echo "Négatif";
} else {
    echo "Nul";
}

// Exercice 3
$nombre = 6;
if ($nombre % 2 == 0) {
    echo "Pair";
} else {
    echo "Impair";
}

// Exercice 4
$age = 25;
if ($age >= 18 && $age <= 65) {
    echo "Dans la plage";
} else {
    echo "Hors plage";
}

// Exercice 5
$password = "1234";
if ($password === "mdpSecret") {
    echo "Valide";
} else {
    echo "Invalide";
}

// Exercice 6
$nombre = 15;
if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Divisible par 3 et 5";
} else {
    echo "Non divisible";
}

// Exercice 7
$temperature = 20;
if ($temperature > 30) {
    echo "Chaud";
} elseif ($temperature >= 15) {
    echo "Modéré";
} else {
    echo "Froid";
}

// Exercice 8
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    if (is_numeric($nombre) && intval($nombre) == $nombre) {
        echo "Nombre entier";
    } else {
        echo "Erreur: Pas un nombre entier";
    }
}

// Exercice 9
$personne = ['nom' => 'Dupont', 'âge' => 30];
if (array_key_exists('ville', $personne)) {
    echo "La clé ville existe";
} else {
    echo "La clé ville n'existe pas";
}
