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
          <h3 class="text-center">Add Manufacture</h3>
          <br>
          <form class="forms-sample" action="functions/add_man.php" method="POST" >
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NAME</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Name" name="man_name">
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number" name="man_mobile">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email" name="man_email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">username</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputPassword2" placeholder="username" name="man_username">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="man_password">
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password" >
                        </div>
                      </div> -->
                      <!-- <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div> -->
                      <button type="submit" class="btn btn-primary mr-2">Add Manufacture</button>
                      
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