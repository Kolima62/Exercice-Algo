<?php

$heure = 0;
$minute = 0;
$seconde = 0;

do {
    $heure = readline("Entre le nombre des heures : ");
} while (!is_numeric($heure));

do {
    $minute = readline("Entre le nombre des minutes : ");
} while (!is_numeric($minute));

do {
    $seconde = readline("Entre le nombre des secondes : ");
} while (!is_numeric($seconde));


if ($heure <= 23 && $minute <= 59 && $seconde <= 58) {
    $seconde += 1;
    echo "Dans une seconde, il sera $heure  heure(s) $minute minute(s) et $seconde seconde(s)";
} elseif ($heure <= 23 && $minute <= 58 && $seconde == 59) {
    $minute += 1;
    $seconde = 0;
    echo "Dans une seconde, il sera $heure heure(s) $minute minute(s) et $seconde seconde.";
} elseif ($heure <= 22 && $minute == 59 && $seconde == 59) {
    $heure += 1;
    $minute = 0;
    $seconde = 0;
    echo "Dans une seconde, il sera $heure heure(s) $minute minute et $seconde seconde.";
} elseif ($heure == 23 && $minute == 59 && $seconde == 59) {
    $heure = 0;
    $minute = 0;
    $seconde = 0;
    echo "Dans une seconde, il sera $heure heure $minute minute et $seconde seconde.";
}
