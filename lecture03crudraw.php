<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password, "kinza");

if (!$con) {
    die("connection failed " . mysqli_connect_error());
} else {
    echo "database is success";
}

// Database creation
$meraSql = "Create database kinza";
$res = mysqli_query($con, $meraSql);

if ($res) {
    echo "db is created ";
}

// Table creation
$table = "
 create table info 
 ( id int primary key  not null auto_increment , 
 name varchar(50), 
 email varchar(50),
 pass varchar(50)
 )
";

$res = mysqli_query($con, $table);

if ($res) {
    echo "table is created ";
}

// Insert query
$name = "chintumintu";
$email = "cm@gmail.com";
$pass = "123456";
$insert = "insert into info (name, email, pass) values('$name', '$email', '$pass')";
$res = mysqli_query($con, $insert);

if ($res) {
    echo "code inserted";
}

// Read data query
$sql = "Select * from info";
$res = mysqli_query($con, $sql);

// Count db table records in a table
$mytotalrows = mysqli_num_rows($res);
echo "my total rows = " . $mytotalrows . "<br>";

// Get each record of the table
$row = mysqli_fetch_assoc($res);
echo "<br> this is my row  " . var_dump($row);

$row = mysqli_fetch_assoc($res);
echo "<br> this is my row  " . var_dump($row);

if ($mytotalrows > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        echo "Name = " . $row["name"] . "<br>";
        echo "email = " . $row["email"] . "<br>";
        echo "pass = " . $row["pass"] . "<br>";
    }
}
?>