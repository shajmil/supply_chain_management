
<?php 

session_start();

if(empty($_SESSION['email'])){
  header('Location:index.php?status=401');
}

include 'config/dbconfig.php';

$sql='SELECT * FROM products ORDER BY pro_id DESC LIMIT 4 ';
$query = mysqli_query($conn,$sql);

$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
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
    <title>Bakery | Homepage 1</title>
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
   <?php include 'partials/dash_navbar.php' ?>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>
    <div class="loader"></div>
    <div class="page-wrap">
      <div class="ps-banner--home-1">
        <div class="rev_slider_wrapper fullscreen-container" id="revolution-slider-1" data-alias="concept121" data-source="gallery" style="background-color:#000000;padding:0px;">
          <div class="rev_slider fullscreenbanner" id="rev_slider_1059_1" style="display:none;" data-version="5.4.1">
            <ul class="ps-banner">
              <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/concept4-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""><img class="rev-slidebg" src="images/banner/img-slider-1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                <div class="tp-caption ps-banner__caption" id="layer01" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-80','-120','-120']" data-width="['none','none','none','400']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1700,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]" style="z-index: 7; white-space: nowrap;text-transform:left;">CUSTOMER IS KING & KING NEVER BARGAINS </div>
                <div class="tp-caption ps-banner__description" id="layer02" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">Because you don't live near a bakery doesn't mean you have to go without cheesecake.</div><a class="tp-caption ps-btn ps-btn--lg" href="menu.php" id="layer03" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','70','70','70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">TRY OUR PRODUCTS <i class="fa fa-angle-right"></i></a>
              </li>
              <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="../../assets/images/concept4-100x100.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""><img class="rev-slidebg" src="images/banner/img-slider-2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                <div class="tp-caption ps-banner__caption" id="layer04" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-100','-80','-120','-120']" data-width="['none','none','none','400']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1700,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]" style="z-index: 7; white-space: nowrap;text-transform:left;">A little bliss in every bite</div>
                <div class="tp-caption ps-banner__description" id="layer05" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">Happiness is baking cookies. Happiness is giving them away...and serving them, and eating them, talking about them, reading and writing about them, thinking about them, and sharing them with you.</div><a class="tp-caption ps-btn ps-btn--lg" href="orders.php" id="layer06" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['80','70','70','70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;from&quot;:&quot;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;&quot;,&quot;speed&quot;:1500,&quot;to&quot;:&quot;o:1;&quot;,&quot;delay&quot;:1500,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1000,&quot;to&quot;:&quot;x:left(R);&quot;,&quot;ease&quot;:&quot;Power3.easeIn&quot;}]">ORDER NOW <i class="fa fa-angle-right"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="ps-section pt-80 pb-40">
        <div class="container">
          <div class="ps-countdown">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 "><img src="images/counter.png" alt="">
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <header class="text-center">
                      <div class="ps-section__top">Hot Deal Today</div>
                      <h4>Vanilla cupcake with red sugar flowers</h4>
                      <p>Only: <span> £1.55 </span></p>
                      <ul class="ps-countdown__time" data-time="May 13, 2019 15:37:25">
                        <!--li <span class="days"></span><p>Days</p>-->
                        <!--li.divider :-->
                        <li><span class="hours"></span><p>Hours</p></li>
                        <li class="divider">:</li>
                        <li><span class="minutes"></span><p>minutes</p></li>
                        <li class="divider">:</li>
                        <li><span class="seconds"></span><p>Seconds</p></li>
                      </ul><a class="ps-btn" href="#">Order Now<i class="fa fa-angle-right"></i></a>
                    </header>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <section class="ps-section ps-section--best-seller pt-40 pb-100">
        <div class="container">
          <div class="ps-section__header text-center mb-50">
            <h4 class="ps-section__top">Products</h4>
            <h3 class="ps-section__title ps-section__title--full">RECENT ADDED</h3>
          </div>
          <div class="ps-section__content">
            <div class="owl-slider owl-slider--best-seller" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="false" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-nav-left="&lt;i class=&quot;ps-icon--back&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;ps-icon--next&quot;&gt;&lt;/i&gt;">
              
            
            
            
     

<?php
              foreach($results as $row) {
?>


              <div class="ps-product">
                <div class="ps-product__thumbnail">
                  <div class="ps-badge"><span>-50%</span></div><a class="ps-product__overlay" href="product-listing.php"></a><img src="../images/<?php echo $row['pro_photo'];?>" alt="">
                  <ul class="ps-product__action">
                    <li><a class="popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out" data-tooltip="View"><i class="ps-icon--search"></i></a></li>
                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                    <li><a href="#" data-tooltip="Add to cart"><i class="ps-icon--shopping-cart"></i></a></li>
                  </ul>
                </div>
                <div class="ps-product__content"><a class="ps-product__title" href="product-lisiting.php"><?php echo $row['pro_name'];?></a>
                  <div class="ps-product__category"><a class="ps-product__category" href="create_order.php">order</a><a class="ps-product__category" href="product-listing.php">product</a><a class="ps-product__category" href="menu.php">menu</a>
                  </div>
                  <select class="ps-rating">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="5">5</option>
                  </select>
                  <p class="ps-product__price"><?php echo $row['pro_price'];?></p>
                </div>
              </div>


              <?php } ?>
            </div>
          </div>
        </div>
      </section>
      <div class="ps-section ps-section--home-testimonial pb-30 bg--parallax" data-background="images/parallax/img-bg-1.jpg">
        <div class="container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-animate-in="" data-owl-animate-out="" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-nav-left="&lt;i class=&quot;fa fa-angle-left&quot;&gt;&lt;/i&gt;" data-owl-nav-right="&lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;">
           
          <div class="ps-testimonial text-center pt-80 pb-100">
              <div class="ps-testimonial__header">
                <div class="ps-testimonial__thumbnail"></div>
                <select class="ps-rating">
                  
                </select>
              </div>
              <div class="ps-testimonial__content">
              </div>
            </div>
          
            <div class="ps-testimonial text-center pt-80 pb-100">
              <div class="ps-testimonial__header">
                <div class="ps-testimonial__thumbnail"></div>
                <select class="ps-rating">
                  
                </select>
              </div>
              <div class="ps-testimonial__content">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <section class="ps-section ps-section--offer pt-80 pb-40">
        <div class="container">
          <div class="ps-section__header text-center mb-100">
            <h4 class="ps-section__top">Making People Happy</h4>
            <h3 class="ps-section__title ps-section__title--full">OFFER THIS WEEK</h3>
          </div>
          <div class="ps-section__content">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
              <div class="ps-masonry">
                <div class="grid-sizer"></div>
                <div class="grid-item high wide">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-offer"><img src="images/offer/banner-1.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                  </div>
                </div>
                <div class="grid-item">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-offer"><img src="images/offer/banner-2.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                  </div>
                </div>
                <div class="grid-item high">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-offer"><img src="images/offer/banner-3.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                  </div>
                </div>
                <div class="grid-item wide">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-offer"><img src="images/offer/banner-4.jpg" alt=""><a class="ps-offer__overlay" href="#"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <?php
      $sql='SELECT * FROM products where pro_cat= 1  ORDER BY pro_id DESC LIMIT 4 ';
$query = mysqli_query($conn,$sql);

$results = mysqli_fetch_all($query,MYSQLI_ASSOC);
?>

      <section class="ps-section ps-section--list-product pt-40 pb-80">
        <div class="container">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header">
                       



                    <h3 class="ps-section__title ps-section__title--left">FAST FOOD</h3>
                  </div>
                  <div class="ps-section__content">
                  <?php
              foreach($results as $row) {
?>
                    <div class="ps-product--list">
                      <div class="ps-product__thumbnail"><a class="ps-product__overlay" ></a><img src="../images/<?php echo $row['pro_photo']; ?>" alt=""></div>
                      <div class="ps-product__content">
                 
                        <h4 class="ps-product__title"><a href=""><?php echo $row['pro_name']; ?></a></h4>
                        <p>Lollipop dessert donut marzipan cookie bonbon sesame snaps chocolate.</p>
                        <p class="ps-product__price">
                          <del>£25.00</del><?php echo $row['pro_price']; ?>
                      </div>
                    </div>
                    <?php } ?>
                  </div>
                </div>
                <?php
      $sl='SELECT * FROM products where pro_cat= 2  ORDER BY pro_id DESC LIMIT 4 ';
$que = mysqli_query($conn,$sl);

$resu = mysqli_fetch_all($que,MYSQLI_ASSOC);
?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header">
                    <h3 class="ps-section__title ps-section__title--left">Bread Buns</h3>
                  </div>
                  <div class="ps-section__content">

                  <?php
              foreach($resu as $r) {
?>

                    <div class="ps-product--list">
                    <div class="ps-product__thumbnail"><a class="ps-product__overlay" ></a><img src="../images/<?php echo $r['pro_photo']; ?>" alt=""></div>
                    <div class="ps-product__content">
                    <h4 class="ps-product__title"><a href=""><?php echo $r['pro_name']; ?></a></h4>
                        <p class="ps-product__price">
                          <del>£25.00</del><?php echo $r['pro_price']; ?>
                      </div>
                    </div>
                    <?php } ?>   
                  </div>
                </div>
          </div>
        </div>
      </section>
    
    
      </div>
    </div> -->
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