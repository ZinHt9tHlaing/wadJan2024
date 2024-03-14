<?php

$conn = mysqli_connect("localhost", "zhh", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno($conn));
}

$id = $_GET["row_id"];
echo $id;

// sql 

$sql = "DELETE FROM products WHERE id = $id";

// query
$query = mysqli_query($conn,$sql);

if($query){
    header("location:index.php");
}