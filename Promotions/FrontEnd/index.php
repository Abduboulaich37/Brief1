<?php
/*Includ database.php here*/ 
include '../Db/database.php';

$obj = new Model();
/*Insert Promotion*/
if(isset($_POST['submit'])){
    $obj->insertPromotion($_POST);
}//if isset close


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Title -->
    <title>Brief 1 : Crud Promotion using PHP POO</title>
</head>
<body><br>
    <!-- Name of Crud -->
    <h1 class="text-center text-info">YourTasks</h1>
    <div class="container">
        <!-- Success message -->
        <?php
        if(isset($_GET['msg']) AND $_GET['msg']=='ins'){
            echo '<div class="alert alert-success">
          Promotion Inserted <strong>Successfuly!</strong> </div>';
        }
        ?>
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter name of promotion" class="form-control">
            </div>
            <div class="form-group text-center">
                <input type="submit" name="submit" value="Submit" class="btn btn-info">
            </div>
        </form><br>
        <h3 class="text-center text-danger">Display Promotions</h3>
        <table class="table table-bordered">
            <tr class="bg-primary text center">
                <th>ID</th>
                <th>Name</th>
            </tr>

        </table>


    </div>
</body>
</html>