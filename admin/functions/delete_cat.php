<?php

include('../config/dbconfig.php');

$id = $_GET['id'];
try {
$sql = "DELETE FROM categories WHERE cat_id=$id SET FOREIGN_KEY_CHECKS=0";

if(mysqli_query($conn,$sql)){
    
    header("Location:../view_cat.php");

}else{
    echo "Not deleted";
}
}
  
//catch exception
catch(Exception $e) {
  header("Location:../dash.php?status=cant");
}