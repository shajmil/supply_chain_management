<?php

include('../config/dbconfig.php');
extract($_POST);

$email = $_POST ["retail_email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
           
            header("Location:../index.php?status=err");
            exit();
}  
$password = md5($retail_password);
$sql=" INSERT INTO retail( retail_address,retail_email,retail_phone,retail_username,retail_password,area_id) VALUES ('$retail_address','$retail_email','$retail_phone','$retail_username','$password','$areaid')";
if(mysqli_query($conn,$sql))
{
    // echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    header("Location:../index.php?status=registered");    

}
else {
  
    echo "error";
}
?>