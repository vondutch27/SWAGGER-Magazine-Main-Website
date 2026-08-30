<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Authentic WordPress Theme
 * @subpackage Templates
 * @version 1.0.0
 * @since Authentic 2.0.0
 * 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php } ?>
	<?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/style/fonts/fonts.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/58e0fef9cb7c8bbe506657ee7/993f9b2d96227c64bbb9dc5a0.js");</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6775151-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-6775151-1');
</script>
	
	<script>
    window.topInit = function () {
      Touchpoint.initialize({
        // There are settings you can pass to the SDK, please check documentation
        settings:{
          //disabled:true,
          containerStyle: {
            margin: '16px', 
            borderRadius: '8px', 
            boxShadow:
              '0px 3px 5px 0px rgba(0,0,0,0.2), 0px 1px 18px 0px rgba(0,0,0,0.12), 0px 6px 10px 0px rgba(0,0,0,0.14)'
          }
        },
        visitor: {
          // you can add more details about the visitor here
          //id: VISITOR_ID,
          //email: VISITOR_EMAIL,
          //role: VISITOR_ROLE,
          //etc
        },
        publisher: {
          //please don't change app_id and pod
          app_id: "DrBhj28Mdzj3gl3P",
          pod: "na2",
        },
      });
    };
  </script>
  <script async defer src="https://touchpoint-sdk.visioncritical.com/main.js"></script>

</head>

<body <?php body_class(); ?>>

<div class="swagger-mobile-menu">
    <div class="mobile-ham-container">
        <a href="javascript:void(0)" data-ham-icon="mobile-menu"><div class="mobile-ham"></div></a>
    </div>

    <div class="mobile-menu-container">
        <div class="menu-top">
              <div class="col-80 logo-container">
                  <a href="#"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/logo.png" alt=""></a>
                  <span>magazine</span>
              </div>
              <div class="col-20">
                  <a href="javascript:void(0)" data-ham-icon="close-menu" class="close-btn">
                    <div class="close-icon">
                    </div>
                  </a>
              </div>
          </div>
        <div class="menu-items">
          <?php
              wp_nav_menu(
                array(
                  'theme_location'  => 'mobile-menu',
                  'menu_class'      => 'items-lists',
                )
              );
              ?>
        </div>

        <div class="mbl-footer">
            <div class="social-icons">
                <ul>
                    <li><a href="https://www.facebook.com"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/facebook.svg"></a></li>
                    <li><a href="https://twitter.com"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/twitter.svg"></a></li>
                    <li><a href="https://www.pinterest.com"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/pinterest.svg"></a></li>
                    <li><a href="https://instagram.com"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/instagram.svg"></a></li>
                    <li><a href="https://youtube.com"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/youtube.svg"></a></li>
                </ul>
            </div>

            <div class="ft-links">
                <div class="col-50 ft-links-one">
                    <ul>
                        <li><a href="#">newsletter</a></li>
                        <li><a href="#">advertise</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">legal</a></li>

                    </ul>
                </div>
                <div class="col-50 ft-links-two">
                    <ul>
                        <li><a href="#">about</a></li>
                        <li><a href="#">masthead</a></li>
                        <li><a href="#">contact</a></li>
                        <li><a href="#">policies</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  
</div>

<div class="subscribe-popup-container">

  <div class="subscribe-popup-overlay">
      <div class="close-btn"></div>
    <div class="sub-popup-content">
    <div class="logo"><img src="https://www.swaggermagazine.com/home/wp-content/uploads/2022/05/popup-logo.png" alt=""></div>
      <span>MEMBERSHIP PERKS</span>
      <h2>GET AN UNFAIR ADVANTAGE.</h2>
      <p>Members get unlimited access to all our most <br> valuable content long before the masses. Exclusive access to newly released gear and tech and entrepreneur secrets delivered to your inbox monthly. All free. No BS.</p>
      <div class="sub-btn"><a href="https://swaggermagazine.us5.list-manage.com/subscribe?u=58e0fef9cb7c8bbe506657ee7&id=5fa0679b55">continue</a></div>
      <div class="popup-footer">
        <div class="ft-bg"></div>
        <p>I’M ALREADY GETTING THE GOODS.</p>
      </div>
    </div>
  </div>

</div>

<div class="des-ham-menu">
    <?php do_action( 'csco_body_start' ); ?>
</div>

<div id="page" class="site">

	<?php do_action( 'csco_site_start' ); ?>

	<div class="site-inner">

		<?php do_action( 'csco_header_before' ); ?>

		<header id="masthead" class="site-header" role="banner">

			<?php do_action( 'csco_header_start' ); ?>

			<?php do_action( 'csco_header' ); ?>

			<?php do_action( 'csco_header_end' ); ?>

		</header>

        <?php if ( is_front_page() ) {?>

            <section class="fullWidthContainer">
                <div class="wrapper">
                    <!-- Main Banner -->
                    <div class="topBlock new">
                        <?php get_template_part( 'template-parts/header/topbanner-main' ); ?>
                        <!-- Banner Sidebar -->
                        <aside class="topSidebar">
                            <?php get_template_part( 'template-parts/header/topbanner-sidebar' ); ?>
                        </aside>
                    </div>
                    <div class="midBlock">
                        <?php get_template_part( 'template-parts/sections/midblock-left' ); ?>
                        <?php get_template_part( 'template-parts/sections/midblock-right' ); ?>
                    </div>
                </div>
            </section>

        <?php } else {?>

        <?php }?>

		<?php do_action( 'csco_header_after' ); ?>

		<?php do_action( 'csco_site_content_before' ); ?>

		<div class="site-content" id="postContent">

			<?php do_action( 'csco_site_content_start' ); ?>

			<div class="container">

				<?php do_action( 'csco_main_content_before' ); ?>

				<div id="content" class="main-content">

					<?php do_action( 'csco_main_content_start' ); ?>
