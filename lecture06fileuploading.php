<?php

$server = "localhost";
$username = "root";
$pass = "";
$database = "uploadimage";
$con = mysqli_connect($server, $username, $pass, $database);


if (!$con) {
    die("connection failed " . mysqli_connect_error());
}

// 
// $sql = "Create database " . $database;


// $res= mysqli_query($con, $sql);

// if ($res) {
//     echo"db is connected";
// }





// // Table creation
// $table = "
//  create table info 
//  ( id int primary key  not null auto_increment , 
//  name varchar(50), 
//  image Text(1000)

//  )
// ";

// $res = mysqli_query($con, $table);

// if ($res) {
//     echo "table is created ";
// }

if (isset($_FILES["image"])) {

    // echo "<pre>";
    // print_r($_FILES);

    // echo "</pre>";



    $name = $_FILES["image"]["name"];
    $size = $_FILES["image"]["size"];
    $tmpname = $_FILES["image"]["tmp_name"];
    $type = $_FILES["image"]["type"];
    $fullpath = $_FILES["image"]["full_path"];


    $upload = move_uploaded_file($tmpname, "upload-images/" . $name);

    if ($upload) {

        $sqlinsert = "insert into info (name, image)values('$name', '$fullpath')";

        $res = mysqli_query($con, $sqlinsert);

        if ($res) {
            echo "file inserted";
        }
    }
}

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="lecture06fileuploading.php" method="post" enctype="multipart/form-data">





        <input type="file" name="image" id="">




        <input type="submit" value="Submit">

    </form>
</body>








</html>