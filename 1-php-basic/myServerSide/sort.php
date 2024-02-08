<?php

system("clear");

// $x = ["x", "y", "z", "C", 1, 2, 2.5, "+"];
// sort($x);
// rsort($x);
// print_r($x);

$assoc = [
    "myName" => "Zin htet hlaing",
    "myAge" => 21,
    "myJob" => "developer",
    "gf" => 1,
    "isHandsome" => "yes"
];

// echo array_search(21,$assoc);
echo array_key_exists("myAge",$assoc);

// print_r(array_keys($assoc));
// print_r(array_values($assoc));

// asort($assoc);
// arsort($assoc);
// ksort($assoc);
// krsort($assoc);

// print_r($assoc);


$arr = ["a", "b", "c", "d", "e", "f"];


// $r = array_splice($arr, 1, 3);
// print_r($r);
// print_r($r);

// // echo array(array_rand($arr));
// foreach(array_rand($arr,3) as $i){
//     echo $arr[$i];
//     echo "\n";
// };
