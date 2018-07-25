
<?php
session_start();
if(!$_SESSION['username']) {
    header('location:welcome.php');
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dash Board</title>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin_style.css">




</head>
<body>
<div class="container" id="container"><!---- Start of container ==== ---->
    <div class="row"><!---- Start of  row ==== ---->
        <div class="col-sm-2"><!---- Start of col-sm-2 ==== ---->
            <h1 class="text-center" id="title_heading">DashBoard</h1>
            <ul id="side_menu" class="nav nav-pills nav-stacked">
                <li class="active"><a href=""><span ><i class="fa fa-th fa-1x"></i></span>&nbsp;Home</a><li>
                <li><a href="category.php"><span ><i class="fa fa-tags fa-1x"></i></span>&nbsp;Category</a><li>
                <li><a href="post_property.php"><span ><i class="fa fa-th-list fa-1x"></i></span>&nbsp;Post Property</a><li>

                <li><a href="logout.php">Posts</a><li>



            </ul>

        </div><!---- End of col-sm-2 ==== ---->
        <div class="col-sm-10"><!---- Start of col-sm-10 ==== ---->
            <div class="col-sm-2"></div>
            <div class="col-sm-10">

                <h2 class="text-center">VIEW ALL THE CATEGORIES</h2>
                <hr>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th >No</th>
                        <th >Category Name</th>
                        <th>Edit</th>
                        <th >Delete</th>

                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td>1</td>
                        <td></td>
                        <td><a href="cat_edit.php?edit" class="btn btn-success">Edit</a> </td>
                        <td><a href="cat_delete.php?delete" class="btn btn-danger">Delete</a> </td>

                    </tr>
                    </tbody>
                </table>



        </div><!---- Start of col-sm-10 ==== ---->
    </div>
</div><!---- End  of container ==== ---->

<script src="../js/jquery2.js"></script>
<script  src="../js/bootstrap.js"></script>
<script  src="../js/font-awesome.min.js"></script>
</body>
</html>