<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Authentic WordPress Theme
 * @subpackage Templates
 * @since Authentic 2.0.0
 * @version 1.0.0
 */

?>

					<?php do_action( 'csco_main_content_end' ); ?>

				</div><!-- .main-content -->

				<?php do_action( 'csco_main_content_after' ); ?>

			</div><!-- .container -->

			<?php do_action( 'csco_site_content_end' ); ?>

		</div><!-- .site-content -->

		<?php do_action( 'csco_site_content_after' ); ?>

		<?php do_action( 'csco_footer_before' ); ?>

		<footer id="newsletter" class="site-footer">

			<?php do_action( 'csco_footer_start' ); ?>

			<?php get_template_part( 'template-parts/footer/footer-layout' ); ?>

			<?php do_action( 'csco_footer_end' ); ?>

		</footer>

		<?php do_action( 'csco_footer_after' ); ?>

	</div><!-- .site-inner -->

	<?php do_action( 'csco_site_end' ); ?>

</div><!-- .site -->

<a href="#top" class="scroll-to-top d-none d-sm-block"></a>

<?php do_action( 'csco_body_end' ); ?>

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function(){
		jQuery("[data-ham-icon='mobile-menu']").click(function(){
			/* jQuery('.mobile-menu-container').fadeIn('slow'); */
			jQuery('.mobile-menu-container').addClass('slide-left');
			jQuery('.category-self-made-copy').css("overflow","hidden");
		});
		jQuery("[data-ham-icon='close-menu']").click(function(){	
			jQuery('.mobile-menu-container').removeClass('slide-left');
			jQuery('.category-self-made-copy').css("overflow","auto");
		});
		jQuery(".items-lists .menu-item-has-children").click(function(){
			jQuery('.items-lists .menu-item-has-children .sub-menu').slideToggle('slow');
			jQuery('.items-lists li.menu-item-has-children').toggleClass('active');
		});
		jQuery('.close-btn').click(function(){
			jQuery('.subscribe-popup-container').fadeOut();
		});

		jQuery("#PopupSignupForm_0 .mc-modal .mc-layout__modalContent iframe").on("load", function() {
			let head = jQuery("#PopupSignupForm_0 .mc-modal .mc-layout__modalContent iframe").contents().find("head");
			let css = '<style>.modalContent__image{width: 50%; left: 50%; transform: translateX(-50%); background-position: center; background-size: contain;}</style>';
			jQuery(head).append(css);
		});
	});
</script>
<?php if (  is_front_page() ) {?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js" type="text/javascript" charset="utf-8"></script>
<?php } else {?>

<?php }?>
</body>
</html>
