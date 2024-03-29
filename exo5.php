<?php

$prix_ht = 0;
$nombre_article = 0;
$tva = 0;
$prix_ttc = 0;

do {
    $prix_ht = readline("Quel est le prix HT ? ");
} while (!is_numeric($prix_ht));

do {
    $nombre_article = readline("Quel est le nombre d'article ? ");
} while (!is_numeric($nombre_article));

do {
    $tva = readline("Quel est la TVA ? ");
} while (!is_numeric($tva));

$prix_ttc = ($prix_ht * $nombre_article) * $tva;

echo ("Le prix est de $prix_ttc E.");
