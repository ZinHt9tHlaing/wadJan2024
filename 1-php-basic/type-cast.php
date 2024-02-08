<?php

// $num = (int) 12.12;
// $num = (float) 12;

$car = (object) [
    "id" => 115,
    "model" => "Tesla Y",
    "brand" => "Tesla",
    "type" => "EV"
];

// var_dump($car);

$result = function (int $w, int $h): int {
    return $w * $h;
};

// print($result(2,5));

function sum(array $number): int
{
    return array_sum($number);
}
print(sum([1, 3, 6, 3]));
