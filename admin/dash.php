<?php 
error_reporting(1);
session_start();
 $status=$_GET['status'];
if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

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
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
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
    echo $status;
                if($status=='cant')
                {

               
                ?>
    <script>
    Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'YOU CANNOT DELETE THIS,VALUE IS USED IN OTHER TABLES!',
        showConfirmButton: false,
        timer: 2500
    })
    </script>
    <?php } ?>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php include 'partials/_sidebar.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php include 'partials/_navbar.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Manufacture</h4>
                                <p class="card-description"> Recently Added
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>

                                            <tr>
                                                <th> id </th>
                                                <th> name </th>
                                                <th> email </th>
                                                <th> phone </th>
                                                <th> username </th>
                                                <th>password </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
            include('config/dbconfig.php');
            $sql='SELECT * FROM manufacturer ORDER BY man_id DESC LIMIT 5';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>

                                            <tr>
                                                <td><?php echo $row['man_id']; ?></td>
                                                <td><?php echo $row['man_name']; ?></td>
                                                <td><?php echo $row['man_email']; ?></td>
                                                <td><?php echo $row['man_phone']; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['password']; ?></td>


                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Products</h4>
                                <p class="card-description"> Recently Added
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-dark">
                                        <thead>
                                            <tr>
                                                <th> id </th>
                                                <th> product name </th>

                                                <th>product price </th>
                                                <th> unit </th>
                                                <th> category </th>
                                                <th> quantity </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
            include('config/dbconfig.php');
            
            $sql = 'SELECT * FROM products,categories,unit WHERE products.pro_cat=categories.cat_id AND products.unit_id=unit.unit_id ORDER BY pro_id DESC LIMIT 5 ';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>

                                            <tr>
                                                <td><?php echo $row['pro_id']; ?></td>
                                                <td><?php echo $row['pro_name']; ?></td>
                                                <td><?php echo $row['pro_price']; ?></td>
                                                <td><?php echo $row['unit_name']; ?></td>
                                                <td><?php echo $row['cat_name']; ?></td>
                                                <td><?php echo $row['quantity']; ?></td>


                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Retailers</h4>
                                <p class="card-description"> Recently Added
                                </p>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> id </th>
                                                <th> username </th>
                                                <th> password </th>
                                                <th>areacode </th>
                                                <th> email </th>
                                                <th> phone </th>
                                                <th> address </th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
            include('config/dbconfig.php');
            $sql = 'SELECT * FROM retail,area where retail.area_id=area.area_id  ORDER BY retail_id DESC LIMIT 5 ';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>

                                            <tr>
                                                <td><?php echo $row['retail_id']; ?></td>
                                                <td><?php echo $row['retail_username']; ?></td>
                                                <td><?php echo $row['retail_password']; ?></td>
                                                <td><?php echo $row['area_code']; ?></td>
                                                <td><?php echo $row['retail_email']; ?></td>
                                                <td><?php echo $row['retail_phone']; ?></td>
                                                <td><?php echo $row['retail_address']; ?></td>


                                            </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include 'partials/_footer.php'; ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>