
<?php

include("includes/header.php");
include ("init/db.php");
//Selecting  the table  post_property in the database to select the following fields.

$cat ="SELECT * FROM  categories";
$cat_query=mysqli_query($conn,$cat);
$row_cat=mysqli_fetch_array($cat_query);

$cat_id =$row_cat['id'];


$property="SELECT * FROM postproperty WHERE cat_name ='commercial properties'";
$pro_query =mysqli_query($conn,$property);




?>

<!--- ====== end of nav ====== -->

<!--- ====== start  of Landing Area ====== -->


<!--- ====== end of Landing Area ====== -->

<!---- ###### the stating of feature property ######----->
<!---- ###### content area ######----->
<div class="row" id="feature">
    <div class="container">
        <div class="col-md-12">
            <h1 class="feature-title">Commercial Properties For sale</h1>
            <hr>
        </div>
        <?php
        while($row_pro=mysqli_fetch_array($pro_query)){

            $pro_name =$row_pro['pro_name'];
            ?>


            <div class='col-md-10' id="img_side" >


                <img  src="images/1.jpg"  width="350px" height="250px" >

                <div class="house_name">

                    <h3><?= $pro_name ?></h3>
                    <h4>Price :7,000,000</h4>
                    <p>Ngong kajado North</p>
                    <p>Heritage Villas</p>
                    <p>heritage villa has 4bedrooms with DSQS,For sale in ngong 46 affordable

                    </p>
                </div>

            </div>

        <?php } ?>





        <!---- ###### end of content area ######----->


        <script src="js/jquery-1.11.1.min.js"></script>
        <script  src="js/bootstrap.min.js"></script>

        </body>
        </html>
