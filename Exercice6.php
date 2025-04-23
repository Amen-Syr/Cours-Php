<?php

//Exo1

$couleurs = ["rouge", "blue", "vert"];

foreach ($couleurs as $key => $value) {
    echo "Couleur " . $key . " " . $value . "", PHP_EOL;
}

// Exo 2

$personne = [
    'nom' => 'Amen',
    'age' => 25
];

echo 'Nom :' . $personne['nom'], PHP_EOL;
echo 'Age :' . $personne['age'], PHP_EOL;

// Exo 3
$fruits = ['Pomme', 'Banane'];

$fruits[] = 'Orange';

foreach ($fruits as $key => $value) {
    echo "Fruits " . $key . " " . $value . "", PHP_EOL;
}

// Exo 4
$animaux = ["chien", "chat", "lapin"];

unset($animaux[1]);

foreach ($animaux as $key => $value) {
    echo "animaux " . $key . " " . $value . "", PHP_EOL;
}

// Exo 5
$nombres = [5, 2, 9, 1, 7];

sort($nombres);

foreach ($nombres as $key => $value) {
    echo "Nombres " . $key . " " . $value . "", PHP_EOL;
}

// Exo 6 
$count_fruit = count($fruits);
echo $count_fruit;

// Exo 7
$sports = ["football", "basketball", "tennis"];

if (in_array('basketball', $sports)) {
    echo 'Yes', PHP_EOL;
} else {
    echo 'No', PHP_EOL;
}

// Exo 8

$tableau1 = ["a", "b"];
$tableau2 = ["c", "d"];

$result = array_merge($tableau1, $tableau2);
print_r($result);


// Exo 9
$capitales = ["France" => "Paris", "Espagne" => "Madrid"];
$pays = array_keys($capitales);
print_r($pays);

// Exo 10
$nombres_2 = [1, 2, 3, 4, 5, 6];

function odd($var)
{
    // retourne si l'entier en entrée est impair
    return $var & 1;
}

function even($var)
{
    // retourne si l'entier en entrée est pair
    return !($var & 1);
}

print_r(array_filter($nombres_2, "odd"));
print_r(array_filter($nombres_2, "even"));


// Exo 11 
$fruits_2 = ["banane", "orange"];
array_unshift($fruits_2, "ananas");
var_dump($fruits_2);

// Exo 12
$personne_1 = [
    "nom" => "Abo_Yazan",
    "age" => 25,
    "pays" => "Syrie"
];

$personne_2 = [
    "nom" => "Al_Baze",
    "age" => 30,
    "pays" => "Syrie"
];

$result_2 = array_merge($personne_1, $personne_2);

print_r($result_2); // Exo non réussit... A voir 


// Exo 13
$pays_2 = ["France", "Espagne", "Italie"]; 
$find_country = array_search( "Espagne",$pays_2);
print_r("Position de l'Espagne : " . $find_country);

// Exo 14

$utilisateur = [
    "nom" => "toto",
    "age" => 20,
    "email" => "toto@gmail.com"
];

$utilisateur['age'] = 25;
$utilisateur['ville'] = 'Syria';

print_r($utilisateur);

// Exo 15

$lettres =  ["a", "b", "c"];
shuffle($lettres);
print_r($lettres); 