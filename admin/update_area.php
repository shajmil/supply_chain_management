

<?php
include 'config/dbconfig.php';

$update_id = $_GET['id'];

$sql = "SELECt * FROM area WHERE area_id=$update_id";

 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// print_r($result);

 ?>
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
          <h3 class="text-center">Add Area</h3>
          <br>
          <form class="forms-sample" action="functions/update_area.php" method="POST" >
                      <div class="form-group">
                      <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">
                        <label for="exampleInputName1">Area Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="AREA Name" name="area_name"  value="<?php echo $result['area_name']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">AREA CODE </label></label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="AREA CODE " name="area_code"  value="<?php echo $result['area_code']; ?>">
                      </div>
                    
                     

                      <button type="submit" class="btn btn-primary mr-2">Update Area</button>
                      
                    </form>

         
                      
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