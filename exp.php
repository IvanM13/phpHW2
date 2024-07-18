<?php

// 5. *С помощью рекурсии организовать функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow)
{
    if($pow == 0){
        return 1;
    }
    return $val * power($val, $pow - 1);
}

$x = readline("enter number = ");
$p = readline("enter pow = ");
echo "result = " . power($x, $p) . PHP_EOL;