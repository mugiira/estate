<!DOCTYPE html>
<html>
<head>
    <title>Vill Care </title>
    <meta viewport="">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet"  href="css/bootstrap.min.css">

</head>
<style>
    body{
        background-color: #EAEEE9;
    }
    #registration{
        position: absolute;
        width: 500px !important;
        height: 300px!important;
        background-color:#fff !important;

        left: 32%;
    }
    input[type="text"]{
        width: 450px !important;
        margin-left:-60px;
    }
    input[type="email"]{
        width: 450px !important;
        margin-left:-60px;
    }
    input[type="password"]{
        width: 300px !important;
        margin-left:-60px;
    }


    h5{

        font-family: monospace;
        font-weight: 300;
        font-size: 20px;
        color: #fff;
        text-align: center;
        background-color:blue;
        margin-top: 1px;
        width: 350px;
        margin-left:-95px;

    }
    .bg{
        width:300px !important;
    }






</style>
<body>
<div class="container"  >
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img alt="Brand" src="images/villacare log.png" class="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FOR SALE  </a>
                    <ul class="dropdown-menu">
                        <li ><a href="for_rent.php">Flat & Apartments</a></li>
                        <li role="separator" class="divider"></li>

                        <li role="separator" class="divider"></li>
                        <li ><a href="">Commercial Properties</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FOR RENT  </a>
                    <ul class="dropdown-menu">
                        <li ><a href="flat_sale.php">Flat & Apartments</a></li>
                        <li role="separator" class="divider"></li>
                        <li ><a href="#">Houses</a></li>
                        <li role="separator" class="divider"></li>
                        <li ><a href="commercial_properties.php">Commercial Properties</a></li>
                        <li role="separator" class="divider"></li>
                        <li ><a href="bedsitter_rent.php">Bedsitter</a></li>

                    </ul>
                </li>

                <li class="activ"><a href="contact.php">CONTACT<span class="sr-only">(current)</span></a></li>
            </ul>
            <div>
                <button class="btn btn-primary list">List Your Propery</button>


            </div>


        </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</nav>

<div class="continer" id="registration">

    <div class="row">

        <div class="col-md-2">

        </div>

        <div class="col-md-8">
            <form method="post" action="#" enctype="multi-data/form-data" >

                <div class="form-group">

                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="Surname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Comments</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="other_names">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg"  name="submit">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>

</body>
</html>
