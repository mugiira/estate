<?php include ("init/db.php");
include ('includes/session.php');





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
            </ul>

        </div><!---- End of col-sm-2 ==== ---->
        <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

            <h1 class="text-center " id="title_heading">Category</h1>
            <div><?php  echo error_Message(),success_Message();?></div>
            <fieldset>
                <form action="category.php" method="post">
                    <div class="form-group">

                        <label for="name">Category </label>
                        <input type="text" name="category" placeholder="enter the category here" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add"class="btn btn-success btn-block" value="ADD CATEGORY"  >
                    </div>
                </form>
            </fieldset>



        </div><!---- Start of col-sm-10 ==== ---->
    </div>
</div><!---- End  of container ==== ---->

<script src="../js/jquery2.js"></script>
<script  src="../js/bootstrap.js"></script>
</body>
</html>
<?php
if(isset($_POST['add'])){
    $cat=$_POST['category'];

    if(empty($cat)){
        $_SESSION['ErrorMessage']="Please you have not entered anything in the category box";


    }
    elseif(strlen($cat)>40){
        $_SESSION['SuccessMessage'] = "it is too long";
        header('location:category.php');
    }else{

        $insert = "INSERT INTO categories (cat_name) VALUES ('$cat')";
        $query = mysqli_query($conn, $insert);
        if ($query) {
            $_SESSION['SuccessMessage'] = "it is  added successfully to the database ";
            header('location:category.php');


        }
    }
}



?>