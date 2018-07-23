<div class="row" id="feature">
    <div class="container">
        <div class="col-md-12">
            <h1 class="feature-title">Feature Property</h1>
            <hr>
            <?php

                $post_pro="SELECT * FROM postproperty ORDER BY RAND() LIMIT 0,3 ";
                $pro_query= mysqli_query($conn,$post_pro);


        ?>
        </div>
        <?php
        while($row_pro= mysqli_fetch_array($pro_query)){
        $pro_id=$row_pro['id'];
        $pro_name=$row_pro['pro_name'];
        $category =$row_pro['cat_name'];
        $pro_location=$row_pro['pro_location'];
        $pro_price=$row_pro['pro_price'];
        $image = $row_pro['image'];
        ?>

            <div class='col-md-3' >


                <div class='feature-one'>
                    <a href="property_details.php?details= <?= $pro_id ?>" class='property-details'>
                        <img  src="Admin_Area/images/<?= $image ?>" class="feature-image"  >



                        <div class='feature-subtitle'>

                            <div class='feature-subtitle'>
                                <h2 class='property-title'> <?php  echo $pro_name ?> </h2>
                                <h3 class='property-location'><?php echo  $pro_location?></h3>
                                <h4 class='property-price'> <?= $pro_price ?> </h4>
                            </div>

                        </div>
                    </a>
                </div>







        </div>

        <?php }  ?>

    </div>
</div>
