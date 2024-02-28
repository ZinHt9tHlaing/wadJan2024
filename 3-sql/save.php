<?php

echo "<pre/>";

// print_r($_POST);

$conn = mysqli_connect("localhost", "zhh", "asdffdsa");

var_dump($conn);

// if(!$conn){
//     echo mysqli_connect_error($conn);
// }

die();

$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

$sql = "INSERT INTO products (name,price,stock) VALUES ($name,$price,$stock) ";

echo $sql;
