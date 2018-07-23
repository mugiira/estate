<?php
include("init/db.php");


if(isset($_GET['edit'])){

    $edit_id =$_GET['edit'];
    $edit_cat="SELECT * FROM categories WHERE id ='$edit_id'";
    $edit_query =mysqli_query($conn,$edit_cat);
    $row_edit =mysqli_fetch_array($edit_query);
    $edit_name =$row_edit['cat_name'];


}


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">



</head>
<body>
<div class="container"><!---- Start of container ==== ---->
    <div class="row"><!---- Start of  row ==== ---->
        <div class="col-sm-2"><!---- Start of col-sm-2 ==== ---->
            <h1>DashBoard</h1>
            <ul id="side_menu" class="nav nav-pills nav-stacked">
                <li ><a href="index.php"><span ><i class="fa fa-th fa-1x"></i></span>Home</a><li>

                <li class="active"><a href="category.php">Category</a><li>
                <li><a href="post_property.php">Posts Jobs</a><li>
                <li class="active"><a href="post.php">Post</a><li>

            </ul>

        </div><!---- End of col-sm-2 ==== ---->
        <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

            <h1 class="text-center " id="title_heading"> Category Edit</h1>

            <fieldset>
                <form action="#" method="post">
                    <div class="form-group">

                        <label for="name">Name Category </label>
                        <input type="text" name="category" placeholder="enter the category here" class="form-control" value="<?= $edit_name ; ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="update" class="btn btn-success btn-block" value="UPDATE CATEGORY"  >
                    </div>
                </form>
            </fieldset>



        </div><!---- Start of col-sm-10 ==== ---->
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['update'])){

    $cat_name=$_POST['category'];


    $update_cat="UPDATE  categories SET cat_name = '$cat_name' WHERE  id ='$edit_id'";

    if(mysqli_query($conn,$update_cat)){

        echo "<script> alert('successfully updated ')</script> ";
        header('location:category.php');

    }

}




?>