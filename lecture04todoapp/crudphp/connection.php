<?php




$server = "localhost";
$username = "root";
$password = "";
$database = "itaskapp";

$insert = false;

$con = mysqli_connect($server, $username, $password, $database);




if (!$con) {

    die("connection_aborted" . mysqli_connect_error());
}
?>