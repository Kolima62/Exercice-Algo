<?php

$heure = 0;
$minute = 0;

do {
    $heure = readline("Entre le nombre des heures : ");
} while (!is_numeric($heure));

do {
    $minute = readline("Entre le nombre des minutes : ");
} while (!is_numeric($minute));

if ($heure <= 23 && $minute <= 58) {
    $minute += 1;
    echo "Dans une minute, il sera $heure  heure(s) $minute.";
} elseif ($heure <= 22 && $minute == 59) {
    $heure += 1;
    $minute = 0;
    echo "Dans une minute, il sera $heure  heure(s) $minute.";
} elseif ($heure = 23 && $minute == 59) {
    $heure = 0;
    $minute = 0;
    echo "Dans une minute, il sera $heure  heure(s) $minute.";
}
