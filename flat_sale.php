
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
            <h1 class="feature-title">Flats and Apartments For Rental</h1>
            <hr>
        </div>
        <?php
        while($row_pro=mysqli_fetch_array($pro_query)){
        $pro_id =$row_pro['id'];
        $pro_name =$row_pro['pro_name'];
        $image =$row_pro['image'];
        $pro_price =$row_pro['pro_price'];
        $pro_location =$row_pro['pro_location'];
        $pro_description =$row_pro['pro_description'];
        ?>

        <div class='col-md-4 '  id="rental_houses" >



                <a href="property_details.php?details= <?= $pro_id ?>" class='rental_image'><img  src="Admin_Area/images/<?= $image ?>"  >

                    <div class="house_name">

                        <h3><?= $pro_name ?></h3>
                        <h4><span >Kshs</span>&nbsp;<?= $pro_price ; ?></h4>
                        <p><?= $pro_location ?></p>

                        <p><?php
                            if(strlen($pro_description)>30){
                                $pro_description = substr($pro_description,0,30).'.....';
                            }
                             echo $pro_description;

                            ?>


                        </p>

                    </div>
                    <a href="property_details.php?details= <?= $pro_id ?>" class="rental_anchor"> <span class="btn btn-info btn-sm">Read More &raquo;</span> </a>


        </div>

        <?php } ?>
    </div>
</div>





        <!---- ###### end of content area ######----->


        <script src="js/jquery-1.11.1.min.js"></script>
        <script  src="js/bootstrap.min.js"></script>

        </body>
        </html>
