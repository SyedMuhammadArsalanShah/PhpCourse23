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




// $meraSql = "Create database kinza";


// $res = mysqli_query($con, $meraSql);



// if ($res) {

//     echo "db is created ";
// }






// $table = "
//  create table info 
//  ( id int primary key  not null auto_increment , 

//  name varchar(50), 
//  email varchar(50),
//  pass varchar(50)

//  )

// ";




// $res = mysqli_query($con, $table);


// if ($res) {
//     echo "table is created ";
// }









$name = "chintumintu";
$email = "cm@gmail.com";
$pass = "123456";






$insert = "insert into info (name, email, pass)values('$name', '$email', '$pass')";





$res = mysqli_query($con, $insert);





if ($res) {
    # code...

    echo "code inserted";
}







$sql = "Select * from info";




$res = mysqli_query($con, $sql);





$mytotalrows = mysqli_num_rows($res);




echo "my total rows =" . $mytotalrows . "<br>";








// $row = mysqli_fetch_assoc($res);

// echo "<br> this my row  " . var_dump($row);



// $row = mysqli_fetch_assoc($res);

// echo "<br> this my row  " . var_dump($row);



if ($mytotalrows > 0) {


    while ($row = mysqli_fetch_assoc($res)) {

        // echo "<br> this my row  " . var_dump($row) . "<br>";
   
        echo "Name = ".$row["name"]."<br>";
        echo "email = ".$row["email"]."<br>";
        echo "pass = ".$row["pass"]."<br>";
 
   
   
    }
}
