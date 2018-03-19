<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage gtheme
 * @since gtheme 1.0
 */
?>
<?php
/*function custom_style_sheet() {
wp_enqueue_style('main', get_stylesheet_directory_uri(). 'wp-content/themes/gtheme/css/main.css');
wp_enqueue_style('fonts', get_stylesheet_directory_uri(). 'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i');
wp_enqueue_style('fonts', get_stylesheet_directory_uri(). 'wp-content/themes/gtheme/css/fontawesome-all.min.css');
wp_enqueue_style('bootstrap', get_stylesheet_directory_uri(). 'wp-content/themes/gtheme/css/bootstrap.min.css');
wp_enqueue_style('base', get_stylesheet_directory_uri(). 'wp-content/themes/gtheme/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'custom_style_sheet');*/
?>
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link href="wp-content/themes/gtheme/css/bootstrap.min.css" rel="stylesheet">
    <link href="wp-content/themes/gtheme/css/base.css" rel="stylesheet">
    <link href="wp-content/themes/gtheme/css/main.css" rel="stylesheet">
    <link href="wp-content/themes/gtheme/css/responsive.css" rel="stylesheet">
<div id="main-slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner banner-prime">
        <div class="item active" style="background-image: url(wp-content/themes/gtheme/images/banner.png);">
          <div class="in-box">
            <div class="dt">
              <div class="dc">
                <h1>SOME CALL TO ACTION <br> WHICH SOUNDS IMPRESSIVE</h1>
                <span class="intro-info">DEVELOPMENT  -  E-COMMERCE  -  UI & UX DESIGN  -  SUPPORT</span>
                <a href="#" class="fancy-btn">GET IN TOUCH</a>
              </div>
            </div>
            <img src="wp-content/themes/gtheme/images/magento-certi.png" alt="" class="certificate">
          </div>
        </div>
        <!-- <div class="item" style="background-image: url(images/banner.png);"></div>
        <div class="item" style="background-image: url(images/banner.png);"></div> -->
      </div>
      <!-- Craousel controls
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
      <a class="left carousel-control" href="#main-slider" data-slide="prev"><i class="fas fa-chevron-left"></i><span class="sr-only">Previous</span></a>
      <a class="right carousel-control" href="#main-slider" data-slide="next"><i class="fas fa-chevron-right"></i><span class="sr-only">Next</span></a> -->
    </div>
    <div class="c-container">
      <div class="container">
        <h2 class="titlez tz-fancy cp text-center">Lorem ipsum <em class="c0">dolor sit</em> amet, consectetuer</h2>
        <div class="row">
          <div class="col-md-10 text-center col-md-offset-1">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing esed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Utia wisi enim ad minim veniam, quis nostrud exerci tation ullamcxkei pilobortis nisl ut aliquip ex ea commodo consequatm vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. <br><br> Nam dignissim auctor suscipit. In sit amet lacinia erat, non congue nunce. Sed lacinia tristique egestas. Nunc vitae leo eu lacus sollicitudin laciniaes.Veistibulum congue vestibiulum diam nec eleifend Nulla coinvallis dui aidLorem ipsum dolor sit amet, consectetuer adipiscing esed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Utia wisi enim ad minim veniam, quis nostrud exerci tation ullamcxkei pilobortis nisl ut aliquip ex ea commodo consequatm vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="cst">
    <div class="c-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="wp-content/themes/gtheme/images/intro-img-1.png" class="img-resp" alt="">
          </div>
          <div class="col-sm-6">
            <h2 class="titlez c0 text-center tz-mb30">Website Design And Development</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing esed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Utia wisi enim ad minim veniam, quis nostrud exerci tation ullamcxkei pilobortis nisl ut aliquip ex ea commodo consequatm vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. <br><br>Nam dignissim auctor suscipit. In sit amet lacinia erat, non congue nunce. Sed lacinia tristique egestas. Nunc vitae leo eu lacus sollicitudin laciniaes.Veistibulum congue vestibiulum diam nec eleifend Nulla coinvallis dui aid</p>
            <div class="text-right"><a href="#" class="btnz">Read more</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="c-container bgc-0">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">
              <div class="col-sm-8 c-col">
                <h2 class="titlez tz-big cp tz-mb30">Lorem ipsum <em class="c0">dolor sit</em> amet, consectetuer</h2>
                <p class="c0"><em>Lorem ipsum dolor sit amet, consectetuer adipiscing esed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Utia wisi enim </em></p>
              </div>
              <div class="col-sm-4 c-col text-center"><a href="#" class="btnz">Contact Us</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="c-container recent-work">
      <div class="container">
        <h2 class="titlez tz-fancy c0 text-center">Our Recent work</h2>
        <div class="row workz">
          <div class="col-sm-6 c-col work-img">
            <img src="wp-content/themes/gtheme/images/work-1.png" class="" alt="">
          </div>
          <div class="col-sm-6 c-col work-detail">
            <div class="w-box">
              <h2 class="titlez tz-mb30 cp">Lorem ipsum dolor sit amet, consectetur</h2>
              <p>Praesent ac nibh vestibulum, laoreet ipsum quis, vestibulum nisi. Curabitur non mi et turpis pharetra vulputate. Ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac nibh vestibulum, laoreet ipsum quis, vestibulum nisi.</p>
              <div class="w-btn"><a href="#" class="btnz">Read more</a></div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a href="#" class="btnz">View all</a>
        </div>
      </div>
    </div>
    <div class="c-container testimonial">
      <h2 class="titlez tz-fancy c0 text-center">What our client says...</h2>
      <div id="testimonial-slider" class="carousel slide testimonial-slider" data-ride="carousel">
        <div class="carousel-inner">

            <?php
            $articles = get_posts(
                array(
                    'numberposts' => 10,
                    'post_status' => array('publish'),
                    'post_type' => get_post_types('', 'names'),
                )
            );
            ?>
            <?php

            foreach ($articles as $article) { ?>

          <div class="item active"><?php

              ?>




              <div class="tbox">

                  <img src="wp-content/themes/gtheme/images/client-1.png" alt="" class="usr-img">
                  <div class="usr-detail">
                      <div class="dt">
                          <div class="dc"><p><header>
                                      <?php   print_r($article->post_content) ; //...?>
                                      </h1>
                                  </header></p></div>
                </div>
              </div>
              <span class="usr-name">-Lorem ipsum</span>
              <div class="controler">
                <a class="left carousel-control" href="#testimonial-slider" data-slide="prev"><i class="fas fa-chevron-left"></i><span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#testimonial-slider" data-slide="next"><i class="fas fa-chevron-right"></i><span class="sr-only">Next</span></a>
              </div>
            </div>
          </div>

                <?php
            }
            ?>
         <!-- <div class="item">
            <div class="tbox">
              <img src="wp-content/themes/gtheme/images/client-1.png" alt="" class="usr-img">
              <div class="usr-detail">
                <div class="dt">
                  <div class="dc"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing esed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Utia wisi enim ad minim veniam, quis nostrud exerci tation ullamcxkei .</p></div>
                </div>
              </div>
              <span class="usr-name">-Lorem ipsum</span>
              <div class="controler">
                <a class="left carousel-control" href="#testimonial-slider" data-slide="prev"><i class="fas fa-chevron-left"></i><span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#testimonial-slider" data-slide="next"><i class="fas fa-chevron-right"></i><span class="sr-only">Next</span></a>
              </div>
            </div>
          </div>-->

        </div>
      </div>
    </div>
    <div class="our-client">
      <div class="container">
        <ul class="clrul">
          <li>

<img class="client-img" src="wp-content/themes/gtheme/images/exness.png" alt="">

            </li>
          <li><img class="client-img" src="wp-content/themes/gtheme/images/sothebys.png" alt=""><img src="wp-content/themes/gtheme/images/sothebys-hover.png" alt="" class="h-client"></li>
          <li><img class="client-img" src="wp-content/themes/gtheme/images/villa.png" alt=""><img src="wp-content/themes/gtheme/images/villa-hover.png" alt="" class="h-client"></li>
          <li><img class="client-img" src="wp-content/themes/gtheme/images/aga.png" alt="">
            <img src="wp-content/themes/gtheme/images/aga-hover.png" alt="" class="h-client"></li>
          <li><img class="wp-content/themes/gtheme/images/client-img" src="wp-content/themes/gtheme/images/granta.png" alt="">
             <img src="wp-content/themes/gtheme/images/granta-hover.png.png" alt="" class="h-client"></li>
            </li>
          <li><img class="client-img" src="wp-content/themes/gtheme/images/network-westmid-lands.png" alt=""><img src="wp-content/themes/gtheme/images/network-westmid-lands-hover.png" alt="" class="h-client"></li>
        </ul>
      </div>
    </div>
    </div>
    <?php get_footer(); ?>
