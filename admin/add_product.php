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
            <div class="main-panel">

                <div class="content-wrapper">
                    <h3 class="text-center">Add Product</h3>
                    <br>
                    <form class="forms-sample" action="functions/add_product.php" method="POST">
                        <h6>select manufacture</h6>
                        <select name="manid" id="manid" class="form-control">
                            <option value="" disabled selected>--- Select manufacture ---</option>
                            <?php
          include('config/dbconfig.php');
            $sql = 'SELECT * FROM manufacturer';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>
                            <option value="<?php echo $row["man_id"]; ?>"><?php echo $row["man_name"] ?></option>
                            <?php } ?>
                        </select>

                        <div class="form-group">
                            <label for="exampleInputUsername1">product name</label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder="product name" name="pro_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> product price </label>
                            <input type="text" class="form-control" id="exampleInputPassword1"
                                placeholder="product price" name="pro_price">
                        </div>
                        <div class="form-group">
                            <h6>select categories</h6>
                            <select name="catid" id="catid" class="form-control">
                                <option value="" disabled selected>--- Select category ---</option>
                                <?php
          include('config/dbconfig.php');
            $sql = 'SELECT * FROM categories';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>
                                <option value="<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_name"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>select unit</h6>
                            <select name="unitid" id="unitid" class="form-control">
                                <option value="" disabled selected>--- Select unit ---</option>
                                <?php
          include('config/dbconfig.php');
            $sql = 'SELECT * FROM unit';
            $query = mysqli_query($conn,$sql);

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC);
            foreach($results as $row) {
            ?>
                                <option value="<?php echo $row["unit_id"]; ?>"><?php echo $row["unit_name"] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="product:stock">
                                <h6>Stock Management</h6>
                            </label><br>
                            <input type="radio" name="stock" value="1">Enable
                            <input type="radio" name="stock" value="2">Disable
                        </div>
                        <label>File upload</label>
                        <!-- <input type="text" name="filename" class="file-upload-default"> -->
                        <div class="input-group col-xs-12">
                            <input type="file" name="pro_photo" class="form-control file-upload-info"
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">product discription</label>
                            <textarea class="form-control" id="exampleTextarea1" name="pro_desc" rows="4"></textarea>
                        </div>


                        <!-- <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div> -->
                        <button type="submit" class="btn btn-primary mr-2">Add Product</button>

                    </form>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <?php include 'partials/_footer.php'; ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>-
    <!-- container-scroller -->
    <!-- plugins:js -->
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