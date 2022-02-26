<?php

include '../config/dbconfig.php';

$id = $_GET['id'];

$sql = "UPDATE categories SET status='1' WHERE cat_id=$id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../view_cat.php');

}else{
    echo "error";
}