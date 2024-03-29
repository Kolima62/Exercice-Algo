<?php

$premier_nombre = 0;
$deuxieme_nombre = 0;


$premier_nombre = readline("Entrez votre premier nombre :");
$deuxieme_nombre = readline("Entrez votre deuxieme nombre :");

if ($premier_nombre < 0 && $deuxieme_nombre < 0) {
    echo ("Votre nombre est positif");
} elseif ($premier_nombre > 0 && $deuxieme_nombre > 0) {
    echo ("Votre nombre est positif");
} else {
    echo ("Votre nombre est négatif");
}
