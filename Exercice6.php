<?php

//Exo1

$couleurs = ["rouge", "blue", "vert"];

foreach ($couleurs as $key => $value) {
    echo "Couleur ". $key ." ". $value ."", PHP_EOL;
}

// Exo 2

$personne = [
    'nom' => 'Amen',
    'age' => 25
];

echo 'Nom :'.$personne['nom'], PHP_EOL;
echo 'Age :'.$personne['age'], PHP_EOL;

// Exo 3
$fruits = ['Pomme', 'Banane'];

$fruits[] = 'Orange';

foreach ($fruits as $key => $value) {
    echo "Fruits ". $key ." ". $value ."", PHP_EOL;
}


// Exo 4
$animaux =  ["chien", "chat", "lapin"];

unset($animaux[1]);

foreach ($animaux as $key => $value) {
    echo "animaux ". $key ." ". $value ."", PHP_EOL;
}

// Exo 5
