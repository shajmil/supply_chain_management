<?php
session_start();
include '../config/dbconfig.php';


extract($_POST);

$_SESSION['man_id']=$manid;



if(!empty($_SESSION['man_id']))
{
    header("Location:../cart_list.php");  
    // print_r($_SESSION['man_id']);
}
?>