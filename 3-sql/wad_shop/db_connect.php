<?php

// connect mysql

$conn = mysqli_connect("localhost", "zhh", "asdffdsa", "wad_shop");

if (!$conn) {
    die(mysqli_connect_errno());
}
