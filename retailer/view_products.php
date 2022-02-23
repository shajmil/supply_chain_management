<?php


include('config/dbconfig.php');
extract($_POST);
$sql = "SELECT DISTINCT pro_cat,cat_name,cat_id FROM products,categories WHERE man_id = $manid AND categories.cat_id=products.pro_cat;";
// $sq = 'SELECT * FROM unit';

$sq =" SELECT  products.pro_id, products.pro_name,man_name,products.pro_cat,pro_photo,categories.cat_name,products.pro_price,unit.unit_name FROM products 
 INNER JOIN unit ON products.unit_id=unit.unit_id 
 INNER JOIN categories ON products.pro_cat=categories.cat_id
 INNER JOIN manufacturer ON products.man_id=manufacturer.man_id
 WHERE products.man_id=$manid";
$query = mysqli_query($conn,$sql);
$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
$quer = mysqli_query($conn,$sq);
$result = mysqli_fetch_all($quer,MYSQLI_ASSOC);
?>

<!DOCTYPE html>

<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
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
    <title>Bakery | Menu 1</title>
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
 <?php include('partials/navbar.php') ;?>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <div class="ps-section--hero"><img src="images/hero/03.jpg" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">Menu</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">Menu</li>
            </ol>
          </div>
        </div>
      </div>
      





     
      <section class="ps-section pt-80 pb-40">
        <div class="container">

        <?php
        //  echo $sq;
        //  echo $sql;
         foreach($results as $row) {
           
         ?>

              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="ps-section__header mb-50">
                  <h3 class="ps-section__title ps-section__title--left"><?php echo $row['cat_name']; ?></h3>
                </div>

                <div class="ps-section__content">
                <?php foreach($result as $ro) {
                if ($row['cat_id'] == $ro['pro_cat']) {
                 ?>
                  <div class="ps-product--list">
                  <div class="ps-product__content">
                  <img src="../images/<?php echo $ro['pro_photo']; ?>" width="100"  height="100"</div>

                      <h4 class="ps-product__title"><a href="product-detail.html"></a><?php echo $ro['pro_name']; ?></h4>
                      <p>Manufactured by <br><?php echo $ro['man_name']; ?></p>
                      <p class="ps-product__price">
                        <del>£25.00</del><?php echo $ro['pro_price']; ?>
                      </p><a class="ps-btn ps-btn--xs" href="cart.html">Order now<i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                  <?php }}?>
                </div>
              </div>
           
<?php } ?>
              
        </div>
      </section>







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