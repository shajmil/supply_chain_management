<?php

include '../config/dbconfig.php';


$id = $_GET['id'];
$sql = "UPDATE retail SET status=1 WHERE retail_id=$id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_retail.php');

}else{
    echo "error";
}