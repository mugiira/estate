<?php include("includes/header.php");
include ("init/db.php");
 if(isset($_GET['details']))
     $pro_id =$_GET['details'];
            $pro_details ="SELECT * FROM postproperty WHERE id ='$pro_id'";
            $pro_query =mysqli_query($conn,$pro_details);
           $row_details =mysqli_fetch_array($pro_query);
            $pro_name=$row_details['pro_name'];
            $image =$row_details['image'];


            $pro_description =$row_details['pro_description'];



?>

    <div class="container" id="property_details">
    <div class="row">
        <h2 class="pro-title"><?=  $pro_name?></h2>
        <hr>
        <div class="col-md-1">
        </div>
        <div class="col-md-10">

           <h1 class="text-center"></h1>
            <div class="main-image" >

                <img  src="Admin_Area/images/<?= $image ?>" class="feature-image-details" height="250px" width="750px" >

            </div>
        </div>
        <div class="col-md-1">
        </div>

    </div>
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10" id="thumbnail">
                <?php
                $pro_details ="SELECT * FROM postproperty WHERE id ='$pro_id'";
                $pro_query =mysqli_query($conn,$pro_details);

                ?>
                <?php
                while($row_details =mysqli_fetch_array($pro_query)){

                $image =$row_details['image'];
                $image1 =$row_details['image1'];
                $image2 =$row_details['image2'];



                ?>
                        <a href="#" class="thumbnail">

                            <img  src="Admin_Area/images/<?= $image ?>" height="250px" width="250px"  >
                            <img  src="Admin_Area/images/<?= $image1 ?>" height="250px" width="250px"  >







                        </a>


<?php } ?>



                </div>
            <div class="col-md-1"></div>

            </div>
        <div class="description">
            <h1 class="text-center">Description of the property</h1>
            <hr>

        <p class="details"><?=$pro_description; ?></p>
        </div>

        </div>

    </div>

<?php include("includes/footer.php");?>

<script src="js/jquery-1.11.1.min.js"></script>
<script  src="js/bootstrap.min.js"></script>

</body>
</html>
