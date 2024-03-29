<?php

$sexe = 0;
$age = 0;


do {
    $sexe = readline("Entrez 1 si vous êtes un homme ou 2 si vous êtes une femme : ");
} while (!is_numeric($sexe));

do {
    $age = readline("Quel age avez-vous ? ");
} while (!is_numeric($age));

if ($sexe >  2) {
    echo ("Sexe non valide.");
}

if ($sexe == 1 && $age > 20) {
    echo ("Vous êtes imposable.");
} elseif ($sexe == 2 && $age >= 18 && $age <= 35) {
    echo ("Vous êtes imposable.");
} else {
    echo ("Vous n'êtes pas imposable.");
}
