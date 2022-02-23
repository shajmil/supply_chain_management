<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<?php
session_start();
include 'config/dbconfig.php';

$id =   $_SESSION['reatil_id'];

$sql = "SELECt * FROM retail,area WHERE retail_id=$id";

 $query = mysqli_query($conn,$sql);

 $result = mysqli_fetch_assoc($query);
// print_r($result);
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="#{author}">
    <meta name="keywords" content="#{keyword}">
    <meta name="description" content="#{description}">
    <title>Bakery | Contact 2</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CPacifico%7CVarela+Round%7CPoppins" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/ps-icon/ps-icon.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="page-init">
  <?php include('partials/navbar.php') ;?>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <div class="ps-section--hero"><img src="images/hero/03.jpg" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">Profile</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">Edit</li>
            </ol>
          </div>
        </div>
      </div>
      <div class="ps-section">
        <div class="container">
          <br>
          <br>
          <div>
            <div  id="contact-map" data-address="New York, NY" data-title="BAKERY LOCATION!" ></div>
            <div class="row">
                 
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="ps-contact__form">
                      <div class="form-group">
                      <form class="forms-sample" action="functions/update_retail.php" method="POST">
                      <input type="hidden" name="update_id" value="<?php echo $id; ?>">
                      <label for="exampleInputUsername1">username</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="retail_username" value="<?php echo $result['retail_username']; ?>" >
                      </div>
                      <div class="form-group">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="retail_password" value="<?php echo $result['retail_password']; ?>">
                      </div>
                     
                      <?php
include 'config/dbconfig.php';



$sql = "SELECT * FROM area WHERE area_id IN 
(SELECT area_id FROM retail where retail_id='$id')";



 $query = mysqli_query($conn,$sql);

 $resul = mysqli_fetch_assoc($query);
 
// print_r($resul);
?>
                    </div> <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>   
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="retail_email" value="<?php echo $result['retail_email']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Phone" name="retail_phone" value="<?php echo $result['retail_phone']; ?>">
                      </div>
                      <div class="form-group">
                      <label>select area</label>
                        <select class="ps-select" data-placeholder="Popupar product"  name="areaid" id="areaid">
                        <option value="<?php echo $resul['area_id']; ?>" selected ><?php echo $resul['area_code']; ?></option>
                                   
          <?php
          include('config/dbconfig.php');
          $sql = 'SELECT * FROM area';
            $query = mysqli_query($conn,$sql);
            

            $results = mysqli_fetch_all($query,MYSQLI_ASSOC); 
          
            
            foreach($results as $row) {
            ?>
              
            <option value="<?php echo $row["area_id"]; ?>"><?php echo $row["area_code"]." (".$row["area_name"].")"; ?></option>
			<?php } ?>
                          
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">address</label>
                        <textarea class="form-control" id="exampleTextarea1" name="retail_address" rows="4"> <?php echo $result['retail_address']; ?></textarea>
                      </div> 
                        <label for="exampleTextarea1">question</label>
                        <textarea class="form-control" id="exampleTextarea1" name="qstn" rows="4"> <?php echo $result['qstn']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Answer</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="answer" name="ans" value="<?php echo $result['ans']; ?>">
                      </div>
                      <div class="form-group text-center mt-30">
                        <button class="ps-btn ps-btn--sm ps-contact__submit">Submit</button>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>

    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/overflow-text.js"></script>
    <script type="text/javascript" src="plugins/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="plugins/moment.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
    <!-- Revolution - slider--><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>