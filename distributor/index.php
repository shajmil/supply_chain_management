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
    <!-- Include a required theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">

    <script src="sweetalert2/dist/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <?php
                if($status=='pending')
                {

               
                ?>
    <script>
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'VERIFICATION IS NOT COMPLETED',
        showConfirmButton: false,
        timer: 1500
    })
    </script>
    <?php }
               else if($status=='success')
               {
                 ?>
    <script>
    Swal.fire(
        'Good job!',
        'status confirmed',
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
                                 else if($status=='notauser')
                                 {
                                  
                                  ?>
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'please Sign Up',
        footer: '<a href="">Why do I have this issue?</a>'
    })
    </script>
    <?php }
                                   ?>

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3">CHECK STATUS</h3>
                            <form action="functions/check_fun.php" method="post">
                                <div class="form-group">
                                    <label>NUMBER *</label>
                                    <input type="text" class="form-control p_input" name="num">
                                </div>


                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Check</button>
                                </div>
                                <div class="d-flex">


                            </form>

                            <!--  -->
                        </div>
                    </div>
                    <a href="../index.php"> <button class="btn btn-google ">
                            <i class="mdi mdi-google-plus"></i> change account </button> </a>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>