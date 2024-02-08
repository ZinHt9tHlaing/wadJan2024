<?php

// $arr = ["x","y","z"];
// // echo array_pop($arr);
// echo array_shift($arr);
// echo "\n";
// print_r($arr);

// $arr = [];
// array_push($arr,"a");
// array_push($arr,"b");
// array_push($arr,"c");
// array_unshift($arr,"a");
// array_unshift($arr,"b");
// array_unshift($arr,"c");

// print_r($arr);

// $arr = array("a", "b", "c");
// $x = ["x", "y", "z"];

// index array
// print_r($arr);
// echo $arr[0];

// associated array
$assoc = [
    "myName" => "zin htet hlaing",
    "myAge" => 21,
    "myJob" => array("developer", "learner"),
    "gf" => null,
    "isHandsome" => true
];

// echo json_encode($assoc);

// echo array_search(21,$assoc);
// echo array_key_exists("gf", $assoc);


// print_r($assoc["myName"]);
// print_r($assoc["myJob"][0]);

// print_r($x);

// $nums = [5, 12, 10, 6, 7, 3];

// $r =  array_map(function ($el) {
//     return $el *2;
// }, $nums);

// print_r($nums);
// print_r($r);

// $arr = [];
// $arr[0] = "a";
// $arr[1] = "b";
// $arr[2] = "c";
// print_r($arr);

// $assoc = [];
// $assoc["name"] = "zin htet hlaing";
// $assoc["age"] = 21;
// $assoc["gender"] = "male";
// print_r($assoc);

// system('cls');

// $arr = ["a", "b", "c", "d", "e", "f"];

// print_r(explode(" ","san kyi tar"));
// print_r(implode(" ", $arr));

// print_r(array_unique($arr));
// print_r($arr);

// print_r(array_rand(range(1,50,5)));

// echo in_array("c",$arr);
// echo in_array("z",$arr);

// $info = array("coffee","brown","caffeine");
// list($x,$y)=$info;
// echo $x;

// echo current($arr);
// echo "\n";
// echo end($arr);
// echo "\n";

// echo $arr[0];
// echo "\n";
// echo $arr[count($arr)-1];

// print_r(array_slice($arr,1,3));
// print_r($arr);

// foreach (array_rand($arr, 3) as $i) {
//     echo $arr[$i];
//     echo "\n";
// };

// print_r(array_chunk($arr,3));

// $arr = [2,5,,4,2,56,9];
// echo array_product($arr);
// echo array_sum($arr);

$num = [2, 43, 12, 54, 21, 63, 4, 6];

// $arr = array_map(fn ($el) => $el * 2, $num);
// $arr = array_filter($num, fn ($el) => $el < 50);
// $arr = array_reduce($num, fn ($pv, $cv) => $pv + $cv, 0);

// print_r($arr);

// $json = file_get_contents("https://jsonplaceholder.typicode.com/todos/1");
// // echo $json;
// $assoc = json_decode($json,true);
// print_r($assoc);

// echo "\n";
// echo $assoc["userId"];
// echo "\n";
// echo $assoc["title"];

// echo PHP_VERSION;
