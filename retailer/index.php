<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 07:36:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">

    <script src="sweetalert2/dist/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Login </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <?php
error_reporting(1);
session_start();
if(!empty($_SESSION['email'])){
  header('Location:dash.php');
}
$status=$_GET['status'];
?>
    <meta name="robots" content="noindex, follow">
    <!-- <script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="../../../cdn-cgi/zaraz/sd41d.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script></head> -->

<body>

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
                                   else if($status=='registered')
                                   {
                                    
                                    ?>
    <script>
    Swal.fire({
        icon: 'sucess',
        title: 'good',
        text: 'registered success',
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
        text: 'reset success',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php }
                                                                         else if($status=='err')
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


    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="functions/login_fun.php" method="POST">
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="email" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>

                    </div>

                    <div class="text-center p-t-30">

                        <a class="txt1" href="forget.php">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="text-center p-t-20">

                        <a class="txt1" href="register.php">
                            new user?
                        </a>
                    </div>

                </form>

            </div>

        </div>
        <a href="../index.php"> <button class="btn btn-google ">
                <i class="mdi mdi-google-plus"></i> change account </button> </a>
    </div>
    <div id="dropDownSelect1"></div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/animsition/js/animsition.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>

    <script src="vendor/countdowntime/countdowntime.js"></script>

    <!-- <script src="java/main.js"></script> -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6cabfe5e4ab685f0","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 07:36:20 GMT -->

</html>