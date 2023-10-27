<?php

require'connection.php';



if (isset($_POST["titleEditt"])) {




    $title = $_POST["titleEditt"];
    $desc = $_POST["descEditt"];
    $id = $_POST["editid"];

    $sql = "update  info  set title='$title', description='$desc'  where id ='$id' ";




    $res =  mysqli_query($con, $sql);



    if ($res) {
        echo "successfull updated";
        // $insert = true;


        header("Location:../lecture04todoapp.php");
    } else {
        echo "failed";
    }
}
