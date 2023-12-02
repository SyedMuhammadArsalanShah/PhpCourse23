<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "lrs";




$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("connection is failed " . mysqli_connect_error());
}
else{

    echo "success";
}
