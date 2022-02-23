<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE distributor SET dist_name='$dist_name', dist_email='$dist_email',dist_phone='$dist_phone',dist_address='$dist_address' WHERE dist_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_distributor.php'); 

}else{
    echo "error";
}