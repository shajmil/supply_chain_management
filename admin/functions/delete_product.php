<?php

include('../config/dbconfig.php');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM products WHERE pro_id=$id";
    if(mysqli_query($conn,$sql)){
    
    header("Location:../view_product.php");

}else{
    echo "Not deleted";
}
    throw new Exception( 'error'); 

  }
  
  //catch exception
  catch(Exception $e) {
    header("Location:../dash.php?status=cant");
  }