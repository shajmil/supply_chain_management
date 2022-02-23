
<?php
include 'config/dbconfig.php';

$update_id = $_GET['id'];

$sql = "SELECt * FROM distributor WHERE dist_id=$update_id";

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
          <h3 class="text-center">Add Distributor</h3>
          <br>
          <form class="forms-sample" action="functions/update_distributor.php" method="POST" >
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="dist_name" value="<?php echo $result['dist_name']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"   name="dist_email"  value="<?php echo $result['dist_email']; ?>">
                      </div>
                    
                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Gender</label>
                        <select class="form-control" id="exampleSelectGender" name="dist_gender">
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div> -->
                     
                      <div class="form-group">
                        <label for="exampleInputCity1">phone</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="phone" name="dist_phone"  value="<?php echo $result['dist_phone']; ?>" >
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">address</label>
                        <textarea class="form-control" id="exampleTextarea1" name="dist_address"   rows="4" ><?php echo $result['dist_address']; ?></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">update</button>
                      
                    </form>
                    <form method="post" action="update_photo.php">
                    <div class="d-flex justify-content-xl-end">
                    <input type="hidden" name="update_id" value="<?php echo $update_id; ?>">
                    <button type="submit" class="btn btn-primary mr-2">update photo</button>
                    </div></form>
                      
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