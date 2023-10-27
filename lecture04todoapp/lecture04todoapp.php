<?php








// $db = "create database itaskapp";


// $res = mysqli_query($con, $db);



// if ($res) {


//     echo "db created";
// }




// $table = "
//  create table info 
//  ( id int primary key  not null auto_increment , 
//  title varchar(50), 
//  description varchar(50)

//  )
// ";

// $res = mysqli_query($con, $table);

// if ($res) {
//     echo "table is created ";
// }





require 'crudphp/connection.php';




if (isset($_GET["deletevalue"])) {



    $sno = $_GET["deletevalue"];




    $sql = "delete from info where id = '$sno'";



    $res =  mysqli_query($con, $sql);





    if ($res) {
        echo "delete successfully";
    } else {
        echo "delete failed";
    }
}





?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <!-- cdn datatable link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- jquery -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="crudphp/update.php">

                        <input type="hidden" name="editid" id="editidd">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="titleEditt" id="titleEdit" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Discription</label>
                            <textarea class="form-control" name="descEditt" id="descEdit" rows="3"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>






    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">itaskapp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    // if ($insert) {
    //     echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    //     <strong>Task  Successfull!</strong>Your Task has been created.
    //     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    // </div>";
    // }
    ?>
    <div class="container">

        <form method="post" action="crudphp/create.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Discription</label>
                <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-success" type="submit">Create</button>
                <button class="btn btn-danger" type="submit">Delete</button>
            </div>
        </form>
    </div>






    <div class="container">

        <h1>Task List</h1>
        <table id="myTable" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>

            <tbody>
                <tr>


                    <?php
                    require 'crudphp/connection.php';
                    $showsql = "Select * from info ";

                    $result = mysqli_query($con, $showsql);

                    $totalcount = mysqli_num_rows($result);
                    $count = 1;
                    if ($totalcount > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {


                            echo "<td>" . $count++ . "</td>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["description"] . "</td>";
                            echo "<td>
                            <button type='button' class='btn btn-warning deletes' id=d" . $row["id"] . ">Delete</button>
                            <button type='button'  class='btn btn-info edits' id=" . $row["id"] . "  >Edit</button> </td>
                            
                            
                            
                            </tr>";
                            // echo "<td>" . $row["desc"] . "</td>"
                        }
                    }

                    ?>


            </tbody>
        </table>
    </div>





    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

    
    <script src="js/update.js"></script>
    <script src="js/delete.js"></script>



</body>

</html>