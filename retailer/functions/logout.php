<?php

session_start();

if(!empty($_SESSION['email'])){
     session_destroy();
     header("Location:../index.php?status=logout");


}else{
    header("Location:../index.php");
}