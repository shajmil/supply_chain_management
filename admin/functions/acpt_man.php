<?php

include '../config/dbconfig.php';


$id = $_GET['id'];
$sql = "UPDATE manufacturer SET status=1 WHERE man_id=$id"; 

if(mysqli_query($conn,$sql)){
   


    header('Location:../view_man.php');

}else{
    echo "error";
}