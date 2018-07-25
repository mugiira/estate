    <?php include ("init/db.php");
        include ('includes/session.php');

        if(isset($_GET['edit'])) {
            $edit_id = $_GET['edit'];
        $post_edit ="SELECT * FROM  postproperty WHERE id ='$edit_id'";
        $post_query =mysqli_query($conn,$post_edit);
        $row_post=mysqli_fetch_array($post_query);
            $cat_name=$row_post['cat_name'];
            $pro_name =$row_post['pro_name'];
            $pro_location =$row_post['pro_location'];
            $pro_price =$row_post['pro_price'];

            $pro_des =$row_post['pro_description'];
            $image =$row_post['image'];
            $image1 =$row_post['image1'];

        }


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
                    <li><a href="#"><span ><i class="fa fa-th fa-1x"></i></span>Home</a><li>
                    <li><a href="category.php"><span ><i class="fa fa-tags fa-1x"></i></span>&nbsp;Category</a><li>
                    <li class="active"><a href="post_property.php"><span ><i class="fa fa-th-list fa-1x"></i></span>&nbsp;Post property</a><li>
                    <li><a href="property_view.php">Property View</a><li>

                </ul>

            </div><!---- End of col-sm-2 ==== ---->
            <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->

                <h1 class="text-center" id="title_heading" >PROPERTY UPDATE</h1>
                <div><?php  echo error_Message(),success_Message();?></div>
                <fieldset>
                    <form  method="post"  action="#"  enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="pro_name">Property Name </label>
                            <input type="text" name="pro_name" placeholder="enter the property name " class="form-control" id="pro_name" value="<?= $pro_name;?>">
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
                            <input type="text" name="pro_location" placeholder="enter the location" class="form-control" id="location" value="<?=$pro_location ; ?>">
                        </div>

                        <div class="form-group">
                            <label for="price">Property Price </label>
                            <input type="text" name="pro_price" placeholder="enter the Property price" class="form-control" id="price"  value="<?= $pro_price;?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image1</label>
                            <input type="file" id="exampleInputFile" name="image">
                            <img  src="images/<?= $image ?>" height="80px" width="80px">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image1</label>
                            <input type="file" id="exampleInputFile" name="image1">
                            <img  src="images/<?= $image1 ?>" height="80px" width="80px">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Upload Image1</label>
                            <input type="file" id="exampleInputFile" name="image2">

                        </div>




                        <div class="form-group">
                            <label for="pro_description">Property description </label>
                            <textarea class="form-control" rows="3" id="pro_description" name="pro_description"><?= $pro_des; ?></textarea>

                        </div>

                        <div class="form-group">
                            <input type="submit" name="update" class="btn btn-success btn-block"  value="UPDATE"  >
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

if(isset($_POST['update'])) {
    $pro_name = $_POST['pro_name'];
    $post_category = $_POST['job_category'];
    $pro_location = $_POST['pro_location'];
    $pro_price = $_POST['pro_price'];
    $pro_description = $_POST['pro_description'];


    $images=$_FILES['image']['name'];
    $images_tmp=$_FILES['image']['tmp_name'];

    $images1=$_FILES['image1']['name'];
    $images1_tmp=$_FILES['image1']['tmp_name'];









    if (empty($pro_name) || empty($pro_location) || empty($pro_price)) {
        $_SESSION['ErrorMessage'] = "Please you have not entered anything in the category box";

    } elseif (($pro_name) > 40) {
        $_SESSION['SuccessMessage'] = "it is too long";
        header('location:post_property.php');
    } else {

        move_uploaded_file($images_tmp,"images/$images");
        move_uploaded_file($images1_tmp,"images/$images1");

        $update_post="UPDATE  postproperty SET cat_name = ' $post_category',pro_name='$pro_name',pro_location='$pro_location'
          ,pro_price='$pro_price',pro_description='$pro_description',image='$images',image1='$images1' WHERE  id ='$edit_id' ";

        if(mysqli_query($conn,$update_post)){

            echo "<script> alert('successfully updated ')</script> ";

            echo "<script>window.open('property_view.php','_self')</script>";

        }



    }
}
?>