<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE products SET pro_photo='$pro_photo' WHERE pro_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_product.php'); 

}else{
    echo "error";
}