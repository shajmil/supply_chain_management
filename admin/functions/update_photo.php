<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE distributor SET dist_photo='$dist_photo' WHERE dist_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_distributor.php'); 

}else{
    echo "error";
}