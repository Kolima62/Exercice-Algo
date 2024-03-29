<?php

$nombre = 0;
$resultat = 0;

do {
    $nombre = readline("Quel est votre nombre ? ");
} while (!is_numeric($nombre));

$resultat = $nombre * $nombre;

echo ("Le carré de $nombre est $resultat.");
