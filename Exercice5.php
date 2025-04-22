<?php
// Exercice 1
for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

// Exercice 2
$somme = 0;
$i = 1;
while ($i <= 10) {
    $somme += $i;
    $i++;
}
echo $somme . "\n";

// Exercice 3
$i = 1;
do {
    echo $i . "\n";
    $i++;
} while ($i <= 5);

// Exercice 4
$fruits = ["pomme", "banane", "orange", "kiwi"];
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "\n";
}