<?php

// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
// а в качестве значений – массивы с названиями городов из соответствующей области. 
// Вывести в цикле значения массива, чтобы результат был таким: 
// Московская область: Москва, Зеленоград, Клин 
// Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт 
// Рязанская область … (названия городов можно найти на maps.yandex.ru).

$arr = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Всеволжск',
        'Павловск'
    ],
    'Рязанская область' => [
        'Рязань'
    ]
];

foreach ($arr as $key => $value) {
    $str = $key . ": ";
    foreach ($value as $city) {
        $str = $str . $city . ", ";
    }
    $str = substr_replace($str, '.', -2);
    echo $str . PHP_EOL;
}