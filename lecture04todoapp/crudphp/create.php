<?php

require'connection.php';

if (isset($_POST["title"])) {

    $title = $_POST["title"];
    $desc = $_POST["desc"];

    $sql = "insert into info(title, description)values('$title', '$desc')";




    $res =  mysqli_query($con, $sql);



    if ($res) {
        // echo "successfull";
        header("Location:../lecture04todoapp.php");
    } else {
        echo "failed";
    }
}
