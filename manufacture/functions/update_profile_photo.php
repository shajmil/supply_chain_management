<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE manufacturer SET man_photo='$pro_photo' WHERE man_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../dash.php'); 

}else{
    echo "error";
}