<?php
session_start();

include '../config/dbconfig.php';

$email=$_POST['email'];
$passwor=$_POST['password'];

$sql = "SELECT * FROM retail WHERE retail_username='$email'";

$query = mysqli_query($conn,$sql);

$login_result = mysqli_fetch_row($query);
$pass = $login_result[2];
$password = md5($passwor);
if($pass == $password)
{
    $verify = 1;
}
if(!empty($login_result)){
   
    if($verify == 1){

        $_SESSION['email'] = $email;
        $_SESSION['reatil_id'] =$login_result[0];
        // $_SESSION['type']='admin'
      
        header('Location:../dash.php');

    }
else{
    // 

    header('Location:../index.php?status=password');
   
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
