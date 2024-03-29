<?php

$age = 0;

do {
    $age = readline("Entre ton age : ");
} while (!is_numeric($age));

if ($age >= 6 && $age <= 7) {
    echo ("Tu es de la catégorie Poussin");
} elseif ($age >= 8 && $age <= 9) {
    echo ("Tu es de la catégorie Pupille");
} elseif ($age >= 10 && $age <= 11) {
    echo ("Tu es de la catégorie Minime");
} elseif ($age > 12) {
    echo ("Tu es de la catégorie Cadet");
} else {
    echo ("Tu n'es dans aucune catégorie");
}
