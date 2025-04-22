<?php
$name = "Jean";
echo $name . "\n\n";

$firstName = "Jean";
$lastName = "Dupont";

echo "Bonjour, je m'appelle " . $firstName . " " . $lastName . ".\n";
echo "Bonjour, je m'appelle $firstName $lastName.\n\n";

$a = 5;
$b = 3;

echo "Somme : " . ($a + $b) . "\n";
echo "Différence : " . ($a - $b) . "\n";
echo "Produit : " . ($a * $b) . "\n";
echo "Quotient : " . ($a / $b) . "\n\n";

$isLoggedIn = false;
echo "Utilisateur connecté : " . ($isLoggedIn ? 'true' : 'false') . "\n";

$isLoggedIn = true;
echo "Utilisateur connecté : " . ($isLoggedIn ? 'true' : 'false') . "\n\n";

$variable1 = "test";
$maVariable = "exemple";
$class = "PHP";

echo "$variable1, $maVariable, $class\n\n";

$temperature = 25;
var_dump($temperature);

$temperature = "chaud";
var_dump($temperature);
