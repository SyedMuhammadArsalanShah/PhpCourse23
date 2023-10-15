<?php



$server = "localhost";

$username = "root";



$pass = "";



$database = "abdulrehman";


$insert = false;


$meraconnection = mysqli_connect($server, $username, $pass, $database);



if (!$meraconnection) {
    // echo "database is failed";
    die("connection is failed" . mysqli_connect_error());
} 
// else {


//     echo "database is success";
// }



if (isset($_POST["ua"])) {

    $uservalue = $_POST["ua"];
    $passvalue = $_POST["pa"];

    $sql = "insert into info(username, password)values('$uservalue', '$passvalue')";




    $res =  mysqli_query($meraconnection, $sql);



    if ($res) {
        // echo "successfull";
        $insert = true;
    } else {
        echo "failed";
    }
}











?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .form-container {
            font-family: 'Poppins', sans-serif;
            background: repeating-linear-gradient(-45deg, #111, #111 4px, #2a2314 4px, #2a2314 8px);
            padding: 40px 25px;
            border-top: 6px solid #17c0eb;
        }

        .form-container .title {
            color: #fff;
            font-size: 30px;
            font-weight: 500;
            text-transform: capitalize;
            width: calc(100% - 129px);
            margin: 0 0 40px;
            display: inline-block;
        }

        .form-container .create-account {
            color: #fff;
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize;
            width: 125px;
            vertical-align: top;
            display: inline-block;
        }

        .form-container .create-account a {
            color: #fff;
            transition: all 0.3s ease 0s;
        }

        .form-container .create-account a:hover {
            color: #17c0eb;
        }

        .form-container .form-horizontal .form-group {
            background-color: #17c0eb;
            font-size: 0;
            padding: 10px;
            margin: 0 0 25px;
            border-radius: 5px;
        }

        .form-container .form-horizontal .input-icon {
            color: #fff;
            font-size: 25px;
            line-height: 20px;
            margin: 0 10px 0 0;
            display: inline-block;
        }

        .form-container .form-horizontal .form-control {
            color: #fff;
            background: transparent;
            font-size: 16px;
            width: calc(100% - 32px);
            height: 27px;
            padding: 5px 5px 5px 5px;
            border: none;
            border-radius: 0;
            box-shadow: none;
            display: inline-block;
            vertical-align: top;
        }

        .form-container .form-horizontal .form-control:focus {
            box-shadow: none;
        }

        .form-container .form-horizontal .form-control::placeholder {
            color: #fff;
            font-size: 16px;
        }

        .form-container .form-horizontal .btn {
            color: #615F5F;
            background: #222;
            font-size: 20px;
            line-height: 20px;
            width: 140px;
            padding: 14px 25px;
            border-radius: 10px;
            border: none;
            display: inline-block;
            transition: all 0.3s ease 0s;
        }

        .form-container .form-horizontal .btn:hover,
        .form-container .form-horizontal .btn:focus {
            background: #17c0eb;
            outline: none;
        }

        .form-container .form-horizontal .btn i {
            font-size: 16px;
        }

        .form-container .form-horizontal .forgot {
            font-size: 14px;
            font-weight: 500;
            text-align: right;
            width: calc(100% - 145px);
            display: inline-block;
            vertical-align: top;
        }

        .form-container .form-horizontal .forgot a {
            color: #fff;
            transition: all 0.3s ease 0s;
        }

        .form-container .form-horizontal .forgot a:hover {
            color: #17c0eb;
        }


        .myform {

            margin-top: 100px;
            margin-left: 35vw;
        }
    </style>


</head>

<body>


    <?php



    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Login Successfull!</strong>Your account has been created.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
    }

    ?>
    <div class="container myform ">
        <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="form-container">
                            <div class="form-icon"><i class="fa fa-user"></i></div>
                            <h3 class="title">sign in</h3>
                            <span class="create-account"><a href="">create account</a></span>
                            <form class="form-horizontal clearfix" method="POST" , action="lecture02form.php">
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="ua" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="pa" class="form-control" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-right"></i> Sign In</button>
                                <span class="forgot"><a href="#">Forgot Password?</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>