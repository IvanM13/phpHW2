<?php

// 6. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
// 22 часа 15 минут
// 21 час 43 минуты.

date_default_timezone_set('Europe/Moscow');

$time = date("H:i");
$timeArray = explode(':', $time);

$str = '';

for ($i = 0; $i < count($timeArray); $i++) {
    $str = $str . ' ' . $timeArray[$i] . ' ' . word((int)$timeArray[$i], $i);
}

echo $str . PHP_EOL;



function word(int $digit, int $index): string
{
    if ($index === 0) {
        if ($digit % 20 >= 2 && $digit % 20 <= 4) {
            return "часа";
        } else if ($digit % 20 === 1) {
            return "час";
        } else {
            return "часов";
        }
    } else {
        if ($digit % 10 >= 2 && $digit % 10 <= 4 && ($digit < 12 || $digit > 14)) {
            return "минуты";
        } else if ($digit % 10 === 1 && $digit !== 11) {
            return "минута";
        } else {
            return "минут";
        }
    }
}