<?php
include ("init/db.php");

session_start();
if(isset($_POST['login'])){
    $username= $_POST['username'];
    $pass= $_POST['pass'];

    $check_email="SELECT * FROM users WHERE username ='$username' AND password = '$pass'";
    $run= mysqli_query($conn,$check_email);

    if(mysqli_num_rows($run)> 0){
        $_SESSION['username']= $username;
        echo " <script> window.open('welcome.php','_self')</script>";
    }
    else{

        echo "<script> alert('email or password is incorrect') </script>";
    }


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


</head>
<style>
    h2{
        font-family: "Roboto Black";
        font-size: 28px;
        font-weight: 100;
        text-transform: uppercase;
        color: black;

    }
    .navbar{
        min-height: 80px !important ;

        background-color: rgba(238, 228, 217, 0.7) !important;
        border:none!important;
        border-radius: none !important;

    }
    .navbar .navbar-inverse{
        height: 50px;
    }
    .logo{
        width: 200px;
        height: 60px;

    }
label{
    font-family:monospace;
    font-size: 20px;
    font-weight: 100;
    text-transform: uppercase;
    color: black;

}


</style>
<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"></a>
            <img alt="Brand" src="../images/villacare log.png" class="logo">
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">



        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
<div class="row">
    <div class="col-md-4"></div>


    <div class="col-md-4">
<fieldset>
    <form action="#" method="post">
        <h2> Villa Care Admin Access</h2>

        <div class="form-group">

            <label for="name">UserName </label>
            <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" name="username"  class="form-control">
            </div>
        </div>
        <div class="form-group">

            <label for="name">Password </label>
            <div class="input-group">
                <span class="input-group-addon" >
                    <span class="glyphicon glyphicon-user" >
                    </span>

                </span>
            <input type="password" name="pass" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" name="login"class="btn btn-info btn-block" value="Login"  >
        </div>
    </form>
</fieldset>
    </div>
    <div class="col-md-4"></div>
</div>
</div>


<script src="../js/jquery2.js"></script>
<script  src="../js/bootstrap.js"></script>
</body>
</html>