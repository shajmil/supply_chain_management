<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}
$total = 0;
include 'config/dbconfig.php';
$order_id=$_GET['id'];

$sql = " SELECT order_items.order_id,retail.retail_username,retail.retail_address,retail.retail_phone,retail.retail_email,orders.date,orders.status,order_items.quantity,products.pro_name,products.pro_price,products.pro_photo,orders.total_amount FROM order_items
INNER JOIN orders  ON order_items.order_id=orders.order_id
INNER JOIN products ON order_items.pro_id=products.pro_id
INNER JOIN retail  ON orders.retailer_id=retail.retail_id
WHERE order_items.order_id=$order_id";
$query = mysqli_query($conn,$sql);

$results = mysqli_fetch_all($query,MYSQLI_ASSOC);


?>
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
    <!-- Fonts-->      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

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
    <style>
      body{
    margin-top:20px;
    background:#eee;
}
.product-card {
  position: relative;
  max-width: 380px;
  padding-top: 12px;
  padding-bottom: 43px;
  transition: all 0.35s;
  border: 1px solid #e7e7e7;
}
.product-card .product-head {
  padding: 0 15px 8px;
}
.product-card .product-head .badge {
  margin: 0;
}
.product-card .product-thumb {
  display: block;
}
.product-card .product-thumb > img {
  display: block;
  width: 100%;
}
.product-card .product-card-body {
  padding: 0 20px;
  text-align: center;
}
.product-card .product-meta {
  display: block;
  padding: 12px 0 2px;
  transition: color 0.25s;
  color: rgba(140, 140, 140, .75);
  font-size: 12px;
  font-weight: 600;
  text-decoration: none;
}
.product-card .product-meta:hover {
  color: #8c8c8c;
}
.product-card .product-title {
  margin-bottom: 8px;
  font-size: 16px;
  font-weight: bold;
}
.product-card .product-title > a {
  transition: color 0.3s;
  color: #343b43;
  text-decoration: none;
}
.product-card .product-title > a:hover {
  color: #ac32e4;
}
.product-card .product-price {
  display: block;
  color: #404040;
  font-family: 'Montserrat', sans-serif;
  font-weight: normal;
}
.product-card .product-price > del {
  margin-right: 6px;
  color: rgba(140, 140, 140, .75);
}
.product-card .product-buttons-wrap {
  position: absolute;
  bottom: -20px;
  left: 0;
  width: 100%;
}
.product-card .product-buttons {
  display: table;
  margin: auto;
  background-color: #fff;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .11);
}
.product-card .product-button {
  display: table-cell;
  position: relative;
  width: 50px;
  height: 40px;
  border-right: 1px solid rgba(231, 231, 231, .6);
}
.product-card .product-button:last-child {
  border-right: 0;
}
.product-card .product-button > a {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all 0.3s;
  color: #404040;
  font-size: 16px;
  line-height: 40px;
  text-align: center;
  text-decoration: none;
}
.product-card .product-button > a:hover {
  background-color: #ac32e4;
  color: #fff;
}
.product-card:hover {
  border-color: transparent;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
}
.product-category-card {
  display: block;
  max-width: 400px;
  text-align: center;
  text-decoration: none !important;
}
.product-category-card .product-category-card-thumb {
  display: table;
  width: 100%;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
}
.product-category-card .product-category-card-body {
  padding: 20px;
  padding-bottom: 28px;
}
.product-category-card .main-img, .product-category-card .thumblist {
  display: table-cell;
  padding: 15px;
  vertical-align: middle;
}
.product-category-card .main-img > img, .product-category-card .thumblist > img {
  display: block;
  width: 100%;
}
.product-category-card .main-img {
  width: 65%;
  padding-right: 10px;
}
.product-category-card .thumblist {
  width: 35%;
  padding-left: 10px;
}
.product-category-card .thumblist > img:first-child {
  margin-bottom: 6px;
}
.product-category-card .product-category-card-meta {
  display: block;
  padding-bottom: 9px;
  color: rgba(140, 140, 140, .75);
  font-size: 11px;
  font-weight: 600;
}
.product-category-card .product-category-card-title {
  margin-bottom: 0;
  transition: color 0.3s;
  color: #343b43;
  font-size: 18px;
}
.product-category-card:hover .product-category-card-title {
  color: #ac32e4;
}
.product-gallery {
  position: relative;
  padding: 45px 15px 0;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
}
.product-gallery .gallery-item::before {
  display: none !important;
}
.product-gallery .gallery-item::after {
  box-shadow: 0 8px 24px 0 rgba(0, 0, 0, .26);
}
.product-gallery .video-player-button, .product-gallery .badge {
  position: absolute;
  z-index: 5;
}
.product-gallery .badge {
  top: 15px;
  left: 15px;
  margin-left: 0;
}
.product-gallery .video-player-button {
  top: 0;
  right: 15px;
  width: 60px;
  height: 60px;
  line-height: 60px;
}
.product-gallery .product-thumbnails {
  display: block;
  margin: 0 -15px;
  padding: 12px;
  border-top: 1px solid #e7e7e7;
  list-style: none;
  text-align: center;
}
.product-gallery .product-thumbnails > li {
  display: inline-block;
  margin: 10px 3px;
}
.product-gallery .product-thumbnails > li > a {
  display: block;
  width: 94px;
  transition: all 0.25s;
  border: 1px solid transparent;
  background-color: #fff;
  opacity: 0.75;
}
.product-gallery .product-thumbnails > li:hover > a {
  opacity: 1;
}
.product-gallery .product-thumbnails > li.active > a {
  border-color: #ac32e4;
  cursor: default;
  opacity: 1;
}
.product-meta {
  padding-bottom: 10px;
}
.product-meta > a, .product-meta > i {
  display: inline-block;
  margin-right: 5px;
  color: rgba(140, 140, 140, .75);
  vertical-align: middle;
}
.product-meta > i {
  margin-top: 2px;
}
.product-meta > a {
  transition: color 0.25s;
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
}
.product-meta > a:hover {
  color: #8c8c8c;
}
.cart-item {
  position: relative;
  margin-bottom: 30px;
  padding: 0 50px 0 10px;
  background-color: #fff;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
}
.cart-item .cart-item-label {
  display: block;
  margin-bottom: 15px;
  color: #8c8c8c;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
}
.cart-item .cart-item-product {
  display: table;
  width: 420px;
  text-decoration: none;
}
.cart-item .cart-item-product-thumb, .cart-item .cart-item-product-info {
  display: table-cell;
  vertical-align: top;
}
.cart-item .cart-item-product-thumb {
  width: 110px;
}
.cart-item .cart-item-product-thumb > img {
  display: block;
  width: 100%;
}
.cart-item .cart-item-product-info {
  padding-top: 5px;
  padding-left: 15px;
}
.cart-item .cart-item-product-info > span {
  display: block;
  margin-bottom: 2px;
  color: #404040;
  font-size: 12px;
}
.cart-item .cart-item-product-title {
  margin-bottom: 8px;
  transition: color, 0.3s;
  color: #343b43;
  font-size: 16px;
  font-weight: bold;
}
.cart-item .cart-item-product:hover .cart-item-product-title {
  color: #ac32e4;
}
.cart-item .count-input {
  display: inline-block;
  width: 85px;
}
.cart-item .remove-item {
  right: -10px !important;
}
@media (max-width: 991px) {
  .cart-item {
    padding-right: 30px;
  }
  .cart-item .cart-item-product {
    width: auto;
  }
}
@media (max-width: 768px) {
  .cart-item {
    padding-right: 10px;
    padding-bottom: 15px;
  }
  .cart-item .cart-item-product {
    display: block;
    width: 100%;
    text-align: center;
  }
  .cart-item .cart-item-product-thumb, .cart-item .cart-item-product-info {
    display: block;
  }
  .cart-item .cart-item-product-thumb {
    margin: 0 auto 10px;
  }
  .cart-item .cart-item-product-info {
    padding-left: 0;
  }
  .cart-item .cart-item-label {
    margin-bottom: 8px;
  }
}
.comparison-table {
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
.comparison-table table {
  min-width: 750px;
  table-layout: fixed;
}
.comparison-table .comparison-item {
  position: relative;
  margin-bottom: 10px;
  padding: 13px 12px 18px;
  background-color: #fff;
  text-align: center;
  box-shadow: 0 12px 20px 1px rgba(64, 64, 64, .09);
}
.comparison-table .comparison-item .comparison-item-thumb {
  display: block;
  width: 80px;
  margin-right: auto;
  margin-bottom: 12px;
  margin-left: auto;
}
.comparison-table .comparison-item .comparison-item-thumb > img {
  display: block;
  width: 100%;
}
.comparison-table .comparison-item .comparison-item-title {
  display: block;
  margin-bottom: 14px;
  transition: color 0.25s;
  color: #404040;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
}
.comparison-table .comparison-item .comparison-item-title:hover {
  color: #ac32e4;
}
.remove-item {
  display: block;
  position: absolute;
  top: -5px;
  right: -5px;
  width: 22px;
  height: 22px;
  padding-left: 1px;
  border-radius: 50%;
  background-color: #ff5252;
  color: #fff;
  line-height: 23px;
  text-align: center;
  box-shadow: 0 3px 12px 0 rgba(255, 82, 82, .5);
  cursor: pointer;
}
.card-wrapper {
  margin: 30px -15px;
}
@media (max-width: 576px) {
  .card-wrapper .jp-card-container {
    width: 260px !important;
  }
  .card-wrapper .jp-card {
    min-width: 250px !important;
  }
}
    </style>
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
 <?php include('partials/navbar copy.php') ;?>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <div class="ps-section--hero"><img src="images/hero/03.jpg" alt="">
        <div class="ps-section__content text-center">
          <h3 class="ps-section__title">ORDERS</h3>
          <div class="ps-breadcrumb">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li class="active">MY ORDERS</li>
            </ol>
          </div>
        </div>
      </div>
   
   <?php foreach($results as $row) {
$total= $row['pro_price'] * $row['quantity'];
?>
&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;
   <center>
   
<div class="container row">
    <!-- Cart Item-->
    <div class="cart-item d-md-flex justify-content-between">
        <div class="col-sm-4 ">
            <a class="cart-item-product" href="#">
                <div class="cart-item-product-thumb"><img src="../images/<?php echo $row['pro_photo']; ?>" alt="Product" width="100" height="100"></div>
                <div class="cart-item-product-info">
                  <center>
                    <h4 class="cart-item-product-title"><?php echo $row['pro_name']; ?></h4></center>
                </div>
            </a>
        </div>
        <div class="col-sm-4 text-center">
            <div class="cart-item-label">Quantity</div>
            <div class="count-input">
            <?php echo $row['quantity']; ?>
            </div>
        </div>
        <div class="col-sm-2 text-center">
            <div class="cart-item-label">Product price</div><span class="text-xl font-weight-medium"><?php echo $row['pro_price']; ?></span>
        </div>
        <div class="col-sm-2 text-center">
            <div class="cart-item-label">Total</div><span class="text-xl font-weight-medium"><?php echo number_format($total,2) ?></span>
        </div>
    </div>
    <!-- Cart Item-->
   
    &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
    <!-- Coupon + Subtotal-->
    </center>
    <?php } ?>
    <div class="d-sm-flex justify-content-between align-items-center text-center text-sm-left">
       
        <div class="py-2"><h5><span class="d-inline-block align-middle text-sm text-muted font-weight-medium text-uppercase mr-2">total:</span><span class="d-inline-block align-middle text-xl font-weight-medium"></span><?php echo $row['total_amount']; ?></h5></div>
    </div>
    &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
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