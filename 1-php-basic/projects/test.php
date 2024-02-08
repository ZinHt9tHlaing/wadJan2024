<?php

// touch("name.txt");
// mkdir("myText");

// var_dump(is_dir("myText"));
// var_dump(is_file("name.txt"));
// var_dump(file_exists("name.txt"));

// print_r(unlink("name.txt"));
// print_r(rmdir("myText"));

// print_r(pathinfo("input.css"));
// print_r(dirname("node_modules"));

// print_r(rename("name.txt","myName.txt"));

$fileName = "my.txt";

if(file_exists($fileName)){
    touch($fileName);
};

$fileStream = fopen($fileName,"r");
// fwrite($fileStream,"zin");
// fclose($fileStream);

// $fileStream = fopen($fileName,"a");
// fwrite($fileStream," htet");
// fclose($fileStream);

// $fileStream = fopen($fileName,"a");
// fwrite($fileStream," hlaing");
// fclose($fileStream);

// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);
// echo fgetc($fileStream);

while(!feof($fileStream)){
    echo fgetc($fileStream); 
}