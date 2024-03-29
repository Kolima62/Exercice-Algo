<?php

// bleu <- vert <- orange <- rouge <- refusé
// (age < 25 ET durée permis < 2 ET accident = 0 -> rouge) --- accident >= 1 -> refusé)
// (age < 25 ET durée permis > 2) OU (age >= 25 ET durée permis < 2 ET accident = 0 -> orange)) accident = 1 -> rouge, accident > 1 -> refusé
// (age >= 25 ET durée permis > 2 ET accident = 0 -> vert) -- accident = 1 -> orange -- accident = 2 -> rouge -- accident > 2 -> refusé
// SI durée client += 5, vert -> bleu, orange -> vert, rouge -> orange

$accident = 0;
$age = 0;
$duree_permis = 0;
$duree_client = 0;

do {
    $ = readline("Entrez 1 si vous êtes un homme ou 2 si vous êtes une femme : ");
} while (!is_numeric($sexe));