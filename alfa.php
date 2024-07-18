<?php

// 4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие 
// латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). 
// Написать функцию транслитерации строк.

$alfa = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

$str = "Хелло май френд!";

function checkLetter(string $char, array $alfabetTt): string
{
    if (isset($char, $alfabetTt[$char])) {
        $char = $alfabetTt[$char];
    }
    return $char;
}

function Transliteration(string $str, array $alfabetT): string
{
    $newArray = mb_str_split($str);

    for ($i = 0; $i < count($newArray); $i++) {

        if (mb_strtolower($newArray[$i], 'UTF-8') !== $newArray[$i]) {
            $char = mb_strtolower($newArray[$i], 'UTF-8');
            $newArray[$i] = ucfirst(checkLetter($char, $alfabetT));
        } else {
            $newArray[$i] = checkLetter($newArray[$i], $alfabetT);
        }
    }
    return implode('', $newArray);
}

echo $str . PHP_EOL;
echo Transliteration($str, $alfa) . PHP_EOL;