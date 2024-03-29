<?php

$nombre_copie = 0;
$prix = 0;

do {
    $nombre_copie = readline("Combien de photocopie voulez vous ? ");
} while (!is_numeric($nombre_copie));

if ($nombre_copie <= 10) {
    $prix = $nombre_copie * 0.10;
    echo ("Le prix est de $prix E.");
} elseif ($nombre_copie > 10 && $nombre_copie <= 30) {
    $nombre_copie -= 10;
    $prix = (1 + (0.09 * $nombre_copie));
    echo ("Le prix est de $prix E.");
} elseif ($nombre_copie > 30) {
    $nombre_copie -= 30;
    $prix = (2.8 + ($nombre_copie * 0.08));
    echo ("Le prix est de $prix E.");
}
