<?php
session_start();

include '../config/dbconfig.php';

$username=$_POST['username'];
$passwor=$_POST['password'];

$sql = "SELECT * FROM manufacturer WHERE username='$username'";

$query = mysqli_query($conn,$sql);

$login_result = mysqli_fetch_row($query);
$pass = $login_result[5];

$password = md5($passwor);
if($pass == $password)
{
    $verify = 1;
}
if(!empty($login_result)){
   
    if($verify == 1){
        $_SESSION['id'] =$login_result[0];
        // print_r($_SESSION['id']);
        $_SESSION['email'] = $username;
        // $_SESSION['type']='admin'
        header('Location:../dash.php');

    }
else{
   

    header('Location:../index.php?status=password');
    // print_r($login_result);
}
}
else{
    header('Location:../index.php?status=username');
   
}



// if(empty($login_result)){
   
//     header('Location:../index.php?status=error');

// }
// else{
//     $_SESSION['email'] = $email;
//     header('Location:../dash.php');
   
// }
