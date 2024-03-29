<?php

$premier_nombre = 0;
$deuxieme_nombre = 0;

do {
    $premier_nombre = readline("Quel est votre premier nombre ? ");
} while (!is_numeric($premier_nombre));

do {
    $deuxieme_nombre = readline("Quel est votre deuxieme nombre ? ");
} while (!is_numeric($deuxieme_nombre));

if (($premier_nombre > 0 and $deuxieme_nombre < 0) or ($premier_nombre < 0 and $deuxieme_nombre > 0)) {
    echo ("Ce nombre est négatif.");
} elseif (($premier_nombre > 0 and $deuxieme_nombre > 0) or ($premier_nombre < 0 and $deuxieme_nombre < 0)) {
    echo ("Ce nombre est positif.");
} else {
    echo ("Ce nombre est neutre");
}
