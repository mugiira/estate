<?php
global $conn;
function view_feature(){
    include ("init/db.php");
    global $conn;
    $post_pro="select * from postproperty";
    $pro_query= mysqli_query($post_pro,$conn);
    while($row_pro= mysqli_fetch_assoc($pro_query)){

        $pro_name=$row_pro['pro_name'];
        $pro_location=$row_pro['pro_location'];

        echo "
        <div class=\"feature-one\">
                        <a href=\"property_details.php\" class=\"property-details\">
                            <img src=\"images/feature/image3.jpg\" class=\"feature-image\">
                            <div class=\"feature-subtitle\">
                                <h2 class=\"property-title\">  $pro_name </h2>
                                <h3 class=\"property-location\">$pro_location</h3>
                                <h4 class=\"property-price\">From Ksh 26,000,000</h4>
                            </div>
                        </a>
                    </div>
        
        
        ";




    }




}


