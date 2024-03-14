<?php

// read

echo "<pre/>";

$conn = mysqli_connect("localhost", "zhh", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno($conn));
}

// sql statement

$sql = "SELECT * FROM products";

$query = mysqli_query($conn, $sql);

// run query
while ($row = mysqli_fetch_assoc($query)){
    print_r($row);
}

// var_dump($query);

// print_r(mysqli_fetch_all($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));
// var_dump(mysqli_fetch_object($query));

