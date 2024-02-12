<?php


print_r($_GET);

$filename = $_GET["file_name"];
$content = file_get_contents("products/" . $filename);
$obj = json_decode($content);

if (unlink($obj->product_photo)) {
    if (unlink("products/" . $filename)) {
        header("location:product.php");
    }
}
