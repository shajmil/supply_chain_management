<?php

include('../config/dbconfig.php');

$id = $_GET['id'];
try {
$sql = "DELETE FROM categories WHERE cat_id=$id";

if(mysqli_query($conn,$sql)){
    
    header("Location:../manage_cat.php");

}else{
    echo "Not deleted";
}}
  
//catch exception
catch(Exception $e) {
  echo 'cannot delete   ';
}