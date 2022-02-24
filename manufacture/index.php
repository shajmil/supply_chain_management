<?php

error_reporting(1);
session_start();
if(!empty($_SESSION['email'])){
  header('Location:dash.php');
}
$status=$_GET['status'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="js/semantic.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">

    <script src="sweetalert2/dist/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page login">

    <?php
                if($status=='401')
                {

               
                ?>
    <script>
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'please login again',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
    <?php }
               else if($status=='logout')
               {
                 ?>
    <script>
    Swal.fire(
        'Good job!',
        'log out',
        'success'
    )
    </script>
    <?php }
                 else if($status=='password')
                 {
                  
                  ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'password incorrect',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php }
                                 else if($status=='username')
                                 {
                                  
                                  ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Username incorrect',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php }
                                                else if($status=='perfect')
                                   {
                                   ?>

    <script>
    Swal.fire({
        icon: 'sucess',
        title: 'good',
        text: 'Password updated',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php } else if($status=='registered')
                                   {
                                   ?>

    <script>
    Swal.fire({
        icon: 'sucess',
        title: 'good',
        text: 'Registered Sucessfully',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php } else if($status=='err')
                 {
                  
                  ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'invalid email address',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php  }
                                     ?>


    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="../images/images.png" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form action="functions/login_fun.php" method="POST">
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Username</label>
                                    <input type="text" name="username" placeholder="Username" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input">
                                        Remember Me</label>
                                    <a class="forgot" href="forget.php">Forgotten Password?</a>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt">Sing In</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <a href="../index.php"> <button class="btn btn-google ">
                            <i class="mdi mdi-google-plus"></i> change account </button> </a>

                    <a href="register.php"> <button class="btn btn-google " style="float: right;">
                            <i class="mdi mdi-google-plus"></i> Not a User?? </button> </a>
                </div>

            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
    var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>