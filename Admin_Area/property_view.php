<?php include ("init/db.php");
include ('includes/session.php');


// This for editing of category
$pro_property ="SELECT * FROM postproperty";
$query=mysqli_query($conn,$pro_property);



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
            <h1 class="dash">Property View</h1>
            <ul id="side_menu" class="nav nav-pills nav-stacked">
                <li ><a href="dashboad.php"><span ><i class="fa fa-th fa-1x"></i></span>Home</a><li>

                <li class="active"><a href="category.php"><span ><i class="fa fa-tags fa-1x"></i></span>&nbsp;Category</a><li>
                <li><a href="post_property.php"><span ><i class="fa fa-th-list fa-1x"></i></span>&nbsp;Post Property</a><li>
                <li><a href="property_view.php">Property View</a><li>
                <li><a href="logout.php">Logout</a><li>

            </ul>

        </div><!---- End of col-sm-2 ==== ---->
        <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->





        </div><!---- Start of col-sm-10 ==== ---->
        <div class="col-sm-2"></div>
        <div class="col-sm-10">

            <h2 class="text-center">VIEW ALL THE PROPERTIES</h2>

            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Cat Name</th>
                    <th scope="col">pro Name</th>
                    <th scope="col">Pro loc</th>
                    <th scope="col">Pro Price</th>
                    <th scope="col">Pro Desc</th>
                    <th scope="col">Image1</th>
                    <th scope="col">Image2</th>

                    <th scope="col" class="btn btn-success btn-sm" >Edit</th>
                    <th scope="col" class="btn btn-danger btn-sm">Delete</th>


                </tr>
                </thead>
                <tbody>
                <?php
                $s=0;
                while($row_pro=mysqli_fetch_assoc($query)){
                    $pro_id=$row_pro['id'];
                $cat_name=$row_pro['cat_name'];
                $pro_name =$row_pro['pro_name'];
                    $pro_location =$row_pro['pro_location'];
                $pro_price =$row_pro['pro_price'];

                $pro_des =$row_pro['pro_description'];
                $image =$row_pro['image'];
                $image1 =$row_pro['image1'];
                $image2 =$row_pro['image2'];
                $s++;



                ?>
                    <tr>

                        <td><?= $s; ?></td>
                        <td><?= $cat_name ;?></td>
                        <td><?= $pro_name ;?></td>
                        <td><?php
                            if(strlen($pro_location)>10){
                                $pro_location = substr($pro_location,0,10);
                            }
                            echo $pro_location;

                            ?></td>
                        <td><?= $pro_price;?></td>

                        <td> <?php
                            if(strlen($pro_des)>10){
                                $pro_des = substr($pro_des,0,10).'...';
                            }
                            echo $pro_des;

                            ?></td>
                        <td><img  src="images/<?= $image ?>" height="80px" width="80px">  </td>
                        <td><img  src="images/<?= $image1 ?>" height="80px" width="80px">  </td>
                        <td><a href="property_edit.php?edit=<?= $pro_id ;?>" class="btn btn-success">Edit</a> </td>
                        <td><a href="property_delete.php?delete=<?= $pro_id ;?>" class="btn btn-danger">Delete</a> </td>

                    </tr>
                <?php } ?>





                </tbody>
            </table>
        </div>
    </div>



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



<style>
    th{
        font-size: 15px;
        font-family: monospace;
        font-weight: 100;
        color:#fff;
    }
    td{

        font-size: 12px;
        font-family: monospace;
        font-weight: 100;
        color:#fff;

    }
    .btn {
        font-size: 10px;
        font-family: monospace;
        font-weight: 100;

    }
    h2{
        color:#FFFFFF;
    }
</style>
