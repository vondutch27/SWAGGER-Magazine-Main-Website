<?php
/**
 * Primary Navigation Bar
 * Have a look at framework/hooks/actions to see what is hooked into the header
 * See all header parts at template-parts/header/
 *
 * @package Authentic WordPress Theme
 * @subpackage Template Parts
 * @since Authentic 2.0.0
 * @version 1.0.0
 */

// Get navbar settings.
$container           = get_theme_mod( 'navbar_container', 'container' );
$alignment           = get_theme_mod( 'navbar_alignment', 'center' );
$toggle              = get_theme_mod( 'navbar_toggle', true );
$search              = get_theme_mod( 'navbar_search', false );
$social              = get_theme_mod( 'navbar_social', false );
$cart                = get_theme_mod( 'navbar_cart', false );
$logo                = get_theme_mod( 'navbar_logo_select', 'text' );
$logo_text           = get_theme_mod( 'navbar_logo_text', get_bloginfo( 'name' ) );
$logo_default_url    = get_theme_mod( 'navbar_logo_default_url', get_template_directory_uri() . '/images/logo-small-dark.png' );
$logo_overlay_url    = get_theme_mod( 'navbar_logo_overlay_url', get_template_directory_uri() . '/images/logo-small-light.png' );
$logo_default_url_2x = get_theme_mod( 'navbar_logo_default_retina_url', get_template_directory_uri() . '/images/logo-small-dark-2x.png' );
$logo_overlay_url_2x = get_theme_mod( 'navbar_logo_overlay_retina_url', get_template_directory_uri() . '/images/logo-small-light-2x.png' );

// Add alignment class.
$class   = 'navbar-' . $alignment;

// Add search class.
if ( ! $search ) {
	$class .= ' search-disabled';
}

// Add social class.
if ( ! $social ) {
	$class .= ' social-disabled';
}

// Add toggle class.
if ( ! $toggle ) {
	$class .= ' toggle-disabled';
}

?>

<div class="<?php echo esc_html( $class ); ?>">
	<div class="wrapper">
        <button class="navbar-toggle offcanvas-toggle" type="button">
            <i class="icon icon-menu"></i>
        </button>

        <div class="logo">

            <?php
            // Logo.
            if ( 'image' === $logo && $logo_default_url ) {
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img class="logo-image" src="<?php echo esc_html( $logo_default_url ); ?>" srcset="<?php echo esc_html( $logo_default_url ); ?> 1x, <?php echo esc_html( $logo_default_url_2x ); ?> 2x" alt="<?php bloginfo( 'name' ); ?>">
                    <?php if ( 'large' === csco_get_page_header_type() && $logo_overlay_url ) { ?>
                        <img class="logo-image logo-overlay" src="<?php echo esc_html( $logo_overlay_url ); ?>" srcset="<?php echo esc_html( $logo_overlay_url ); ?> 1x, <?php echo esc_html( $logo_overlay_url_2x ); ?> 2x" alt="<?php bloginfo( 'name' ); ?>">
                    <?php } ?>
                </a>
            <?php } ?>

            <?php
            // Text Logo.
            if ( 'text' === $logo && $logo_text ) {
                ?>
                <a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php echo wp_kses_post( $logo_text ); ?>
                </a>
            <?php } ?>

        </div>

		<div class="mainNav">

            <?php if ( is_page('test-page') ) {?>

                <?php ubermenu( 'main' , array( 'menu' => 7700 ) ); ?>

            <?php } elseif ( is_page('test-page-tabnav') ) {?>

                <?php ubermenu( 'main' , array( 'menu' => 7701 ) ); ?>

            <?php } else {?>

                <?php ubermenu( 'main' , array( 'menu' => 7700 ) ); ?>

            <?php }?>

			<div class="mainMenu">

					<?php
					// Social Accounts.
					if ( $social && function_exists( 'bsa_get_accounts' ) ) {

						$labels = get_theme_mod( 'navbar_social_accounts_labels', false );
						$titles = get_theme_mod( 'navbar_social_accounts_titles', false );
						$counts = get_theme_mod( 'navbar_social_accounts_counts', true );
						$limit  = get_theme_mod( 'navbar_social_accounts_limit', 3 );

						bsa_get_accounts( $labels, $titles, $counts, 'nav d-none d-lg-block', $limit );

					}
					?>

					<?php
					// Cart.
					if ( $cart && class_exists( 'woocommerce' ) ) {
						?>

						<a class="header-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_html_e( 'View your shopping cart', 'authentic' ); ?>">
							<i class="icon icon-cart"></i>
							<span class="cart-quantity"><?php echo intval( WC()->cart->get_cart_contents_count() ); ?></span>
						</a>

						<?php
					}
					?>
			</div>

		</div>
        <div class="subscribeNode">
            <a target="_blank" href="https://app.involve.me/swagger/signup-to-swagger"><h3>Subscribe Now</h3>
                <p>Get the Magazine</p></a>
        </div>
        <div class="newsletterNode"><a href="#newsletter"><i class="icon icon-envelope-o" aria-hidden="true"></i><span>Newsletter</span></a></div>
        <div class="searchNode"><a href="#search" class="navbar-search"><i class="icon icon-search"></i></a></div>
	</div>
</div><!-- .navbar-primary -->
