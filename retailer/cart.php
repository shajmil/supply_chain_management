<?php
session_start();

include('config/dbconfig.php');
extract($_POST);



      
            

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


    <title>Bakery | Cart</title>
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
    <style>
      h1 { color: #d54d7b; font-family: "Great Vibes", cursive; font-size: 45px; line-height: 45px; font-weight: normal; margin-bottom: 0px; margin-top: 40px; text-align: center; text-shadow: 0 1px 1px #fff; }
      </style>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="page-init">
  <?php print_r($_SESSION["shopping_cart"]); ?>
  <center><h1>ORDER PLACED</h1></center>
      <div class="ps-section--cart pt-100 pb-100">
        <div class="container">
          <div class="ps-cart-listing">
           
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>All Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th> <?php echo($_SESSION['man_id']); ?> </th>
                    <th></th>
                  </tr>
                  
                </thead>
          
              </table>
            </div>
            <div class="ps-cart__process">
              <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                      <div class="form-group form-group--icon ps-cart__promotion">
                        <div class="icon-wrap"><i class="fa fa-angle-right"></i>
                          <input class="form-control" type="text" placeholder="promotion code">
                        </div>
                      </div>
                      <div class="form-groupform-order">
                        <button class="ps-cart__shopping">Continue Shopping</button>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">

                      <div class="ps-cart__total">
                     
                        <p>Total Price: <span>2599$</span></p>
                        <button class="ps-btn ps-btn--sm ps-btn--fullwidth">Process to checkout</button>
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="ps-section ps-section--subscribe pt-80 pb-80">
        <div class="container">
          <div class="ps-subscribe">
            <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <h4>ABOUT US</h4>
                    <p>Te pri oblique ullamcorper, magna persequeris has eu. Mei prompta dolores examad debet suavitate. Pri te vocibus electram. Eu eleifend rationibus vis, at.</p>
                    <p class="text-uppercase ps-subscribe__highlight">240 CENTRAL PARK, LONDON, OR 10019</p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 "><a class="ps-subscribe__logo" href="index.html"><img src="images/logo-1.png" alt=""></a>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                    <h4>SUBSCRIBE EMAIL</h4>
                    <p>Give us your email, and we shall send regular updates for new stuff and events.</p>
                    <form class="ps-subscribe__form" method="post" action="_action">
                      <input class="form-control" type="text" placeholder="Type your email...">
                      <button class="ps-btn ps-btn--sm">Subscribe</button>
                    </form>
                  </div>
            </div>
          </div>
        </div>
      </section>
      <!--footer-->
      <footer class="ps-footer">
        <div class="container">
          <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                  <div class="ps-widget ps-widget--footer ps-widget--payment">
                    <div class="ps-widget__header">
                      <h3 class="ps-widget__title">PAYMENTS ACCEPTED</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul>
                        <li><a href="#"><img src="images/payment/1.png" alt=""></a></li>
                        <li><a href="#"><img src="images/payment/2.png" alt=""></a></li>
                        <li><a href="#"><img src="images/payment/3.png" alt=""></a></li>
                        <li><a href="#"><img src="images/payment/4.png" alt=""></a></li>
                        <li><a href="#"><img src="images/payment/5.png" alt=""></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                  <div class="ps-widget ps-widget--footer ps-widget--worktime">
                    <div class="ps-widget__header">
                      <h3 class="ps-widget__title">WORK TIME</h3>
                    </div>
                    <div class="ps-widget__content">
                      <p><strong>Monday - Friday</strong> 8:00 am - 8:30 pm</p>
                      <p><strong>Satuday - Sunday</strong>10:00 am - 16:30 pm</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                  <div class="ps-widget ps-widget--footer ps-widget--order">
                    <div class="ps-widget__header">
                      <h3 class="ps-widget__title">ORDERS AND RETURNS</h3>
                    </div>
                    <div class="ps-widget__content">
                          <ul class="ps-list--line">
                            <li><a href="#">Order</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Policy Return Policy</a></li>
                            <li><a href="#">Payments</a></li>
                          </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                  <div class="ps-widget ps-widget--footer ps-widget--connect">
                    <div class="ps-widget__header">
                      <h3 class="ps-widget__title">CONNECT US</h3>
                    </div>
                    <div class="ps-widget__content">
                          <ul class="ps-widget__social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                          </ul><a href="#"><img src="images/app.jpg" alt=""></a>
                      <p>@2017 Design by<a href="#"> Alena Studio</a>.</p>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </footer>
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
    <script>


var count = 0;
var countEl = document.getElementById("count");
function plus(){
count++;
countEl.value = count;
}
function minus(){
if (count > 0) {
count--;
countEl.value = count;
}
}

    </script>
  </body>
</html>