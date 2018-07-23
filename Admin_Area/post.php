
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
    <title>Properties</title>
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
                <li><a href="index.php"><span ><i class="fa fa-th fa-1x"></i></span>Home</a><li>
                <li><a href="category.php">Category</a><li>
                <li ><a href="post_property.php">Post Jobs</a><li>
                <li class="active"><a href="post.php">Post</a><li>
            </ul>

        </div><!---- End of col-sm-2 ==== ---->
        <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

            <h1 class="text-center" id="title_heading" >Post Property</h1>
            <div><?php  echo error_Message(),success_Message();?></div>
            <fieldset>
                <form  method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="pro_name">Category</label>
                        <input type="text" name="category" placeholder="enter the property name " class="form-control" id="pro_name">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputFile">Upload Image1</label>
                        <input type="file" id="exampleInputFile" name="image">

                    </div>






                    <div class="form-group">
                        <input type="submit" name="post" class="btn btn-success btn-block"  value="POST PROPERTY"  >
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

if(isset($_POST['post'])) {
    $category = $_POST['category'];

    $images=$_FILES['image']['name'];
    $images_tmp=$_FILES['image']['tmp_name'];


    move_uploaded_file($images_tmp,"images/$images");



    $insert_post = "INSERT INTO post(category,image)  
          VALUES('$category','$images')";
    $query = mysqli_query($conn, $insert_post);
    if ($query) {
        header('location:index.php');

    }
}



?>

