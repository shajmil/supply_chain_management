<?php

include '../config/dbconfig.php';


extract($_POST);

$sql = "UPDATE manufacturer SET man_name='$man_name', man_email='$man_email',man_phone='$man_phone',qstn='$qstn',ans='$ans' WHERE man_id=$update_id"; 

if(mysqli_query($conn,$sql)){
    header('Location:../dash.php');

}else{
    echo "error";
}