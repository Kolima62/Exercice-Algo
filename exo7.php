<?php

$nombre = 0;

do {
    $nombre = readline("Quel est votre nombre ? ");
} while (!is_numeric($nombre));

if ($nombre < 0) {
    echo ("Ce nombre est négatif.");
} elseif ($nombre > 0) {
    echo ("Ce nombre est positif.");
}
