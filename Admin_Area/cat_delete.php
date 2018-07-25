<?php
include("init/db.php");





if(isset($_GET['delete'])){

    $delete_id=$_GET['delete'];

    $delete_cat="DELETE FROM categories  WHERE id ='$delete_id'";

    $run=mysqli_query($conn,$delete_cat);
    if($run){


        echo "<script> alert('successfully updated ')</script> ";


    }




}


?>