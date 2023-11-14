<?php


session_start();


echo "this my general data";
if (isset($_SESSION["username"])) {

    echo "<h1>welcome in our website ".$_SESSION["username"]."</h1>";
    echo "<b>favourite hobby ".$_SESSION["fav"]."</b>";
}



?>