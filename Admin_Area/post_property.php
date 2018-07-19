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
                            <input type="file" id="exampleInputFile" name="pro_img1">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image2</label>
                            <input type="file" id="exampleInputFile" name="pro_img2">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image3</label>
                            <input type="file" id="exampleInputFile" name="pro_img3">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image4</label>
                            <input type="file" id="exampleInputFile" name="pro_img4">

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

    $property_image=$_FILES['pro_img1']['name'];
    $property_image_tmp=$_FILES['pro_img1']['tmp_name'];

    $property_image1=$_FILES['pro_img2']['name'];
    $property_image1_tmp=$_FILES['pro_img2']['tmp_name'];

    $property_image2=$_FILES['pro_img3']['name'];
    $property_image2_tmp=$_FILES['pro_img3']['tmp_name'];


    $property_image3=$_FILES['pro_img4']['name'];
    $property_image3_tmp=$_FILES['pro_img4']['tmp_name'];

    move_uploaded_file($property_image_tmp,"pro_images/$property_image");
    move_uploaded_file($property_image1_tmp,"pro_images/$property_image1");
    move_uploaded_file($property_image2_tmp,"pro_images/$property_image2");
    move_uploaded_file($property_image3_tmp,"pro_images/$property_image3");


    if (empty($pro_name) || empty($pro_location) || empty($pro_price)) {
        $_SESSION['ErrorMessage'] = "Please you have not entered anything in the category box";

    } elseif (($pro_name) > 40) {
        $_SESSION['SuccessMessage'] = "it is too long";
        header('location:post_property.php');
    } else {
        $insert_post = "INSERT INTO post_property (cat_name,pro_name,pro_location,pro_price,pro_description,pro_image1,pro_image2,pro_image3,pro_image4)
          VALUES('$post_category','$pro_name','$pro_location ','$pro_price','$pro_description',' $property_image',' $property_image1',' $property_image2',' $property_image3')";
        $query = mysqli_query($conn, $insert_post);
        if ($query) {
            $_SESSION['SuccessMessage'] = "it is post is added successfully to the database ";
          

        }

    }
}
?>