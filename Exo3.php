<?php
// Exercice 1
$a = 8;
$b = 4;
$operation = '*';
switch ($operation) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        echo $a / $b;
        break;
}

// Exercice 2
$result = 5 + 3 * 2;
echo $result . "\n";
$result = (5 + 3) * 2;
echo $result . "\n";

// Exercice 3
$x = 10;
var_dump($x > 5);
var_dump($x < 5);
var_dump($x == 10);
var_dump($x != 8);
var_dump($x >= 10);
var_dump($x <= 9);

// Exercice 4
$isAdmin = true;
$isLoggedIn = false;
var_dump($isAdmin && $isLoggedIn);
var_dump($isAdmin || $isLoggedIn);
var_dump($isAdmin xor $isLoggedIn);

// Exercice 5
$score = 15;
echo ($score >= 10) ? "Réussi" : "Échoué";

// Exercice 6
$n = 4;
$n += 3;
echo $n . "\n";
$n *= 2;
echo $n . "\n";
$n -= 1;
echo $n . "\n";
$n %= 5;
echo $n . "\n";

// Exercice 7
$prenom = "Alice";
$nom = "Durand";
echo $prenom . " " . $nom;

// Exercice 8
$file = @fopen("inexistant.txt", "r");
if (!$file) {
    echo "Erreur : fichier introuvable";
}
