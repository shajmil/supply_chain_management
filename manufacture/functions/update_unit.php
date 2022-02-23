<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE unit SET unit_name='$unit_name', unit_details='$unit_details' WHERE unit_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../manage_unit.php');

}else{
    echo "error";
}