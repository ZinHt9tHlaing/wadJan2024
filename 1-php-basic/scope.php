<?php

$x =  "xxx";
const my_name = "zin htet hlaing";

function run (){

    global $x;

    static $z = 5;
    echo $z;
    $z++;

    // $y = "yyy";
    // echo $y;

    // echo my_name;
}

run();
run();
run();
// echo $x;
// echo $y;