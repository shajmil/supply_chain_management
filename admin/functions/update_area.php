<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE area SET area_name='$area_name', area_code='$area_code' WHERE area_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_area.php');

}else{
    echo "error";
}