<?php

include '../config/dbconfig.php';


$id = $_GET['id'];
$sql = "UPDATE distributor SET status=2 WHERE dist_id=$id";
$sq ="SELECT * from distributor where dist_id=$id"; 


if(mysqli_query($conn,$sql)){

    header('Location:../view_distributor.php');

}else{
    echo "error";
}