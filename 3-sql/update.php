<?php

$conn = mysqli_connect("localhost", "zhh", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno($conn));
}

$id = $_POST["row_id"];
$name = $_POST["name"];
$price = $_POST["price"];
$stock = $_POST["stock"];

// sql
$sql = "UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id";
// echo $sql;

// query
$query = mysqli_query($conn, $sql);

if ($query) {
    header("location:index.php");
}
