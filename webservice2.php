<?php
error_reporting(0);
$fold = $_GET["folder_name"];
$url = 'http://localhost/progin-itb/'.$fold;
$input = file_get_contents('http://localhost/testPHP2/input.html');

//open url
    $open = file_get_contents($url);
    echo $open;

//jika folder tidak ditemukan
if (file_exists($url) == FALSE){
    echo "File Tidak Ditemukan";
    echo $input;
}
