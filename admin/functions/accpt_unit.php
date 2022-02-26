<?php

include '../config/dbconfig.php';

$id = $_GET['id'];

$sql = "UPDATE unit SET status='1' WHERE unit_id=$id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_unit.php');

}else{
    echo "error";
}