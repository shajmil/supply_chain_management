<?php

include '../config/dbconfig.php';


extract($_POST);


$sql = "UPDATE categories SET cat_name='$cat_name', cat_details='$cat_details' WHERE cat_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_cat.php'); 

}else{
    echo "error";
}
