<?php

$premier_mot = "";
$deuxieme_mot = "";
$troisieme_mot = "";

do {
    $premier_mot = readline("Quel est votre premier mot ? ");
} while (!is_string($premier_mot));

do {
    $deuxieme_mot = readline("Quel est votre deuxieme mot ? ");
} while (!is_string($deuxieme_mot));

do {
    $troisieme_mot = readline("Quel est votre troisieme mot ? ");
} while (!is_string($troisieme_mot));

if (($premier_mot < $deuxieme_mot) and ($deuxieme_mot < $troisieme_mot)) {
    echo ("Vos mots sont rangés dans l'ordre alphabétique.");
} else {
    echo ("Vos mots ne sont pas rangés dans l'ordre alphabétique.");
}
