
<?php

include("includes/header.php");
include ("init/db.php");
//Selecting  the table  post_property in the database to select the following fields.

$cat ="SELECT * FROM  categories";
$cat_query=mysqli_query($conn,$cat);
$row_cat=mysqli_fetch_array($cat_query);

$cat_id =$row_cat['id'];


$property="SELECT * FROM postproperty WHERE cat_name ='rent'";
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
            <h1 class="feature-title">Flats and Apartments For Sale</h1>
            <hr>
        </div>


            <div class='col-md-10' id="img_side" > <?php
                while($row_pro=mysqli_fetch_array($pro_query)){
                $pro_id =$row_pro['id'];
                $pro_name =$row_pro['pro_name'];
                $image =$row_pro['image'];
                $pro_price =$row_pro['pro_price'];
                $pro_location =$row_pro['pro_location'];
                ?>



                <a href="property_details.php?details= <?= $pro_id ?>" class='property-details'>><img  src="Admin_Area/images/<?= $image ?>" height="250px" width="350px"  >

                <div class="house_name">

                    <h3><?= $pro_name ?></h3>
                    <h4><?= $pro_price ; ?></h4>
                    <p><?= $pro_location ?></p>

                    <p>heritage villa has 4bedrooms with DSQS,For sale in ngong 46 affordable

                    </p>
                </div>
            </>
                <?php } ?>
            </div>







<!---- ###### end of content area ######----->


<script src="js/jquery-1.11.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>

</body>
</html>
