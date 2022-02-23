<?php

include '../config/dbconfig.php';
session_start();

extract($_POST);

$sql = "SELECT * FROM manufacturer WHERE man_email='$mail'";
$_SESSION['mail'] = $mail;
 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);

 if($result['ans'] == $ans)
 {
    header('Location:../new_pass.php');
 }else{

 header('Location:../forget.php?status=wrong'); }
 ?>