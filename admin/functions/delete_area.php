<?php

include('../config/dbconfig.php');

$id = $_GET['id'];
try {

$sql = "DELETE FROM area WHERE area_id=$id";

if(mysqli_query($conn,$sql)){
    
    header("Location:../view_area.php");

}else{
    echo "Not deleted";
}
}
  
//catch exception
catch(Exception $e) {
  header("Location:../dash.php?status=cant");
}