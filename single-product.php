<?php
  require_once 'config.php'; 
  require_once 'single-product-php.php'; 
?>

<!doctype html>
<html lang="zxx">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/lightslider.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <?php
      include 'barre_de_navigation.php';
    ?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcrumb_iner">
              <div class="breadcrumb_iner_item">
                <h2>Shop</h2>
                <p>Home <span>-</span> Shop </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- breadcrumb start-->
    <!--================End Home Banner Area =================-->
    
  
    <!--================Single Product Area 1 =================-->
    
    <div class="container">
    <div class="row align-items-start">
    <?php 
      $marque=$_GET['marque'];
      $products = query('SELECT * FROM products');
    ?>
    
    <?php foreach ($products as $product): 
      //if ($product->marque===$marque){
    ?>
      
    
      <div class="product_image_area section_padding w-50">
        <a href="produit.php?id=<?php echo($product->id);?>">
        <div class="container-fluid w-100 bg-dark">
          <div class="col-12 row s_product_inner justify-content-between">
            <div class="col-6">
              <div class="product_slider_img">
                <div id="vertical">
                  <div data-thumb="img/product/single-product/product_1.png">
                    <img src="img/montre/montre_<?php echo($product->id);?>.png"/>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="s_product_text">
                <h3><?php echo($product->nom); ?></h3>
                <h5><?php echo($product->detail); ?></h5>
                <h2> <?php echo(number_format($product->price,2,',',' ')); ?> €</h2>
                <ul class="list">
                  <li>
                    <a class="active" href="single-product.php?marque=<?php echo($product->marque); ?>">
                      <span>marque : </span> <?php echo($product->marque); ?></a>
                  </li>
                  <li>
                    <a href="#"> <span>Availibility</span> : In Stock</a>
                  </li>
                </ul>
                <p>
                <?php echo($product->description); ?>
                </p>
                <div class="card_area d-flex justify-content-between align-items-center">
                  <div class="product_count">
                    <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="<?php ?>" min="0" max="10">
                    <span class="number-increment"> <i class="ti-plus"></i></span>
                  </div>
                  <a  href="addpanier-php.php?id=<?php echo($product->id);?>" class="btn_3 addPanier">add to cart</a>
                  
                  <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </a>
      </div>
    <?php
    //}
    endforeach ?>
    </div>
    </div>
    <!--================End Single Product Area =================-->


    <!-- product_list part start-->
    <section class="product_list best_seller">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="section_tittle text-center">
              <h2>Best Sellers <span>shop</span></h2>
            </div>
          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-12">
            <div class="best_product_slider owl-carousel">
              <div class="single_product_item">
                <img src="img/product/product_1.png" alt="">
                <div class="single_product_text">
                  <h4>Quartz Belt Watch</h4>
                  <h3>$150.00</h3>
                </div>
              </div>
              <div class="single_product_item">
                <img src="img/product/product_2.png" alt="">
                <div class="single_product_text">
                  <h4>Quartz Belt Watch</h4>
                  <h3>$150.00</h3>
                </div>
              </div>
              <div class="single_product_item">
                <img src="img/product/product_3.png" alt="">
                <div class="single_product_text">
                  <h4>Quartz Belt Watch</h4>
                  <h3>$150.00</h3>
                </div>
              </div>
              <div class="single_product_item">
                <img src="img/product/product_4.png" alt="">
                <div class="single_product_text">
                  <h4>Quartz Belt Watch</h4>
                  <h3>$150.00</h3>
                </div>
              </div>
              <div class="single_product_item">
                <img src="img/product/product_5.png" alt="">
                <div class="single_product_text">
                  <h4>Quartz Belt Watch</h4>
                  <h3>$150.00</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- product_list part end-->

    <!--::footer_part start::-->
    <footer class="footer_part">
      <div class="container">
        <div class="row justify-content-around">
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Top Products</h4>
              <ul class="list-unstyled">
                <li><a href="">Managed Website</a></li>
                <li><a href="">Manage Reputation</a></li>
                <li><a href="">Power Tools</a></li>
                <li><a href="">Marketing Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="">Jobs</a></li>
                <li><a href="">Brand Assets</a></li>
                <li><a href="">Investor Relations</a></li>
                <li><a href="">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Features</h4>
              <ul class="list-unstyled">
                <li><a href="">Jobs</a></li>
                <li><a href="">Brand Assets</a></li>
                <li><a href="">Investor Relations</a></li>
                <li><a href="">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-2">
            <div class="single_footer_part">
              <h4>Resources</h4>
              <ul class="list-unstyled">
                <li><a href="">Guides</a></li>
                <li><a href="">Research</a></li>
                <li><a href="">Experts</a></li>
                <li><a href="">Agencies</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="single_footer_part">
              <h4>Newsletter</h4>
              <p>Heaven fruitful doesn't over lesser in days. Appear creeping
              </p>
              <div id="mc_embed_signup">
                <form target="_blank"
                  action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                  method="get" class="subscribe_form relative mail_part">
                  <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                    class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = ' Email Address '">
                  <button type="submit" name="submit" id="newsletter-submit"
                    class="email_icon newsletter-submit button-contactForm">subscribe</button>
                  <div class="mt-10 info"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright_part">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="copyright_text">
                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer_icon social_icon">
                <ul class="list-unstyled">
                  <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                  <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/lightslider.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/swiper.jquery.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <!-- custom js -->
    <script src="js/theme.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/app.js"></script>
  </body>

</html>