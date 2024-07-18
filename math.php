<?php

// 1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return.

function calc(float $x, float  $y, string $op): float | string {
    if($op === '+'){
        return $x + $y;
    }elseif($op === '-'){
        return $x - $y;
    }elseif($op === '*'){
        return $x * $y;
    }elseif($op === '/'){
        return $y == 0 ? "делить на ноль нельзя" : $x / $y;
    }else{
        return "wrong";
    }
}

// 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case '+':
            echo "result: " . calc($arg1, $arg2, $operation) . "\n";
            break;
        case '-':
            echo "result: " . calc($arg1, $arg2, $operation) . "\n";
            break;
        case '*':
            echo "result: " . calc($arg1, $arg2, $operation) . "\n";
            break;
        case '/':
            echo "result: " . calc($arg1, $arg2, $operation) . "\n";
            break;
        default:
            echo "Error";
            break;
    }
}

$x = readline("enter x = ");
$y = readline("enter y = ");
$op = readline("enter operation: ");

mathOperation($x, $y, $op);





