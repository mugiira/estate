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
                    <li class="active"><a href="post_property.php">Post Jobs</a><li>
                    <li ><a href="post.php">Post</a><li>

                </ul>

            </div><!---- End of col-sm-2 ==== ---->
            <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

                <h1 class="text-center" id="title_heading" >Post Property</h1>
                <div><?php  echo error_Message(),success_Message();?></div>
                <fieldset>
                    <form action="post_property.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="pro_name">Property Name </label>
                            <input type="text" name="pro_name" placeholder="enter the property name " class="form-control" id="pro_name">
                        </div>
                        <div class="form-group">
                            <label >category </label>

                            <select name="job_category" class="form-control">
                                <?php
                                $cat ="SELECT * FROM categories";
                                $cat_query=mysqli_query($conn,$cat);
                                while($cat_row=mysqli_fetch_array($cat_query)){
                                    $cat_name =$cat_row['cat_name'];

                                    ?>
                                    <option><?php echo $cat_name ;?></option>
                                <?php }?>
                            </select>


                        </div>
                        <div class="form-group">
                            <label for="location">Property Location </label>
                            <input type="text" name="pro_location" placeholder="enter the location" class="form-control" id="location">
                        </div>

                        <div class="form-group">
                            <label for="price">Property Price </label>
                            <input type="text" name="pro_price" placeholder="enter the Property price" class="form-control" id="price">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image1</label>
                            <input type="file" id="exampleInputFile" name="image">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image1</label>
                            <input type="file" id="exampleInputFile" name="image1">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image1</label>
                            <input type="file" id="exampleInputFile" name="image2">

                        </div>




                        <div class="form-group">
                            <label for="pro_description">Property description </label>
                            <textarea class="form-control" rows="3" id="pro_description" name="pro_description"></textarea>

                        </div>

                        <div class="form-group">
                            <input type="submit" name="post_property" class="btn btn-success btn-block"  value="POST PROPERTY"  >
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

if(isset($_POST['post_property'])) {
    $pro_name = $_POST['pro_name'];
    $post_category = $_POST['job_category'];
    $pro_location = $_POST['pro_location'];
    $pro_price = $_POST['pro_price'];
    $pro_description = $_POST['pro_description'];


    $images=$_FILES['image']['name'];
    $images_tmp=$_FILES['image']['tmp_name'];

    $images1=$_FILES['image1']['name'];
    $images1_tmp=$_FILES['image1']['tmp_name'];

    $images2=$_FILES['image2']['name'];
    $images2_tmp=$_FILES['image2']['tmp_name'];







    if (empty($pro_name) || empty($pro_location) || empty($pro_price)) {
        $_SESSION['ErrorMessage'] = "Please you have not entered anything in the category box";

    } elseif (($pro_name) > 40) {
        $_SESSION['SuccessMessage'] = "it is too long";
        header('location:post_property.php');
    } else {

        move_uploaded_file($images_tmp,"images/$images");
        move_uploaded_file($images1_tmp,"images/$images1");
        move_uploaded_file($images2_tmp,"images/$images2");


        $insert_post = "INSERT INTO postproperty (cat_name,pro_name,pro_location,pro_price,pro_description,image,image1,image2)
          VALUES('$post_category','$pro_name','$pro_location ','$pro_price','$pro_description','$images','$images1',' $images2')";
        $query = mysqli_query($conn, $insert_post);
        if ($query) {
            $_SESSION['SuccessMessage'] = "it is post is added successfully to the database ";
          

        }

    }
}
?>