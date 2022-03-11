<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <?php include 'partials/_sidebar.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <?php include 'partials/_navbar.php'; ?>'
            <!-- partial -->
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">manufacturer</h4>

                        <div class="table-responsive">
                            <div style="text-align:right; border-top:1px " class="">
                                <form id="" action="search_ret.php" class=" " method="POST">
                                    <div class="">
                                        <br>
                                        <input type="text" name="search" class="" placeholder="Search">
                                        <button type="submit" class="btn btn-sm"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                            <table class="table table-dark">
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
            
extract($_POST);
$search = $_POST['search'];
            $sql = "SELECT * FROM retail,area where retail.area_id=area.area_id && retail.status = 1  && (retail_username LIKE '%{$search}%' || retail_phone LIKE '%{$search}%' || retail_id LIKE '%{$search}%' )  ORDER BY retail.retail_id DESC";
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


                                        <td><a class="btn btn-sm btn-primary" id="btn-update"
                                                href="update_retail.php?id=<?php echo $row['retail_id']; ?>" </a> Update
                                        </td>
                                        <td> <a class="btn btn-sm btn-danger" id="btn-delete"
                                                href="functions/delete_retail.php?id=<?php echo $row['retail_id']; ?>"
                                                <i class="fas fa-trash"></i> Delete</a></td>
                                    </tr>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <script src="assets/vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- Plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- inject:js -->
            <script src="assets/js/off-canvas.js"></script>
            <script src="assets/js/hoverable-collapse.js"></script>
            <script src="assets/js/misc.js"></script>
            <script src="assets/js/settings.js"></script>
            <script src="assets/js/todolist.js"></script>
            <!-- endinject -->
            <!-- Custom js for this page -->
            <!-- End custom js for this page -->
</body>

</html>