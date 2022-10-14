<?php
/*Includ database.php here*/ 
include '../Db/database.php';
include '../Db/insert.php';
include '../Db/update.php';
include '../Db/delete.php';


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
        if(isset($_GET['msg']) AND $_GET['msg']=='ups'){
            echo '<div class="alert alert-success">
          Promotion Updated <strong>Successfuly!</strong> </div>';
        }
        if(isset($_GET['msg']) AND $_GET['msg']=='del'){
            echo '<div class="alert alert-success">
          Promotion Deleted <strong>Successfuly!</strong> </div>';
        }
        ?>

        <?php
        /*fetch promotion for update */ 
        if(isset($_GET['editid'])){
            $editid = $_GET['editid'];
            $mypromotion = $obj->displayPromotionById($editid);
        ?>

        <!-- Update form -->
        <form action="index.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $mypromotion['name']; ?>" placeholder="Enter name of promotion" class="form-control">
            </div>
            <div class="form-group text-center">
                <input type="hidden" name="hid" value="<?php echo $mypromotion['id']; ?>" >
                <input type="submit" name="update" value="Update" class="btn btn-info">
            </div>
        </form>

         <?php
                }else{

    ?>

        <form action="index.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter name of promotion" class="form-control">
            </div>
            <div class="form-group text-center">
                <input type="submit" name="submit" value="Submit" class="btn btn-info">
            </div>
        </form>
        <?php }//else close?>
        
        <br>
        <h3 class="text-center text-danger">Display Promotions</h3>
        <table class="table table-bordered">
            <tr class="bg-primary text center">
                <th style="width: 80%">Name</th>
                <th style="width:  20%">Action</th>
            </tr>
            <?php
            /*Display promotions */
            $data = $obj->displayPromotion();
            foreach ($data as $value) {
            ?>
            <tr>
                <td><?php echo $value['name']; ?></td>
                <td>
                    <a href="index.php?editid=<?php echo $value['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="index.php?deleteid=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr> 
            <?php
            }//foreach close
            ?>

        </table>


    </div>
</body>
</html>