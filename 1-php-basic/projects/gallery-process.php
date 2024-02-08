<?php

echo "<pre/>";

$saveFolder = "photos";

if (!is_dir($saveFolder)) {
    mkdir($saveFolder, 0777);
}

$error = false;

foreach ($_FILES["upload"]["name"] as $key => $name) {
    $ext = pathinfo($name)["extension"];

    $saveFileName = $saveFolder . "/" . uniqid() . "." . $ext;

    if (!move_uploaded_file($_FILES["upload"]["tmp_name"][$key], $saveFileName)) {
        $error = true;
    };
}

if ($error === false) {
    header("location:gallery.php");
}

// print_r($_FILES);
