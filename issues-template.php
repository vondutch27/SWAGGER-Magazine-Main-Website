<?php
/**
 * Template Name: Issues Template
 *
 * A custom page template for Project Page.
 */
get_header(); ?>

	<div id="primary" class="content-area">

		<?php do_action( 'csco_main_before' ); ?>

		<main id="main" class="site-main" role="main">

			<?php do_action( 'csco_main_start' ); ?>

			<?php
			while ( have_posts() ) :
				the_post();
				?>

				<?php do_action( 'csco_page_before' ); ?>

				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php do_action( 'csco_page_start' ); ?>

					<div class="page-wrap">

						<?php do_action( 'csco_page_main_before' ); ?>

						<div class="page-main">

							<?php do_action( 'csco_page_content_before' ); ?>

							<div class="content entry-content">
                                <h1 class="pad10-left-right">READ FULL ISSUES</h1>
                                <?php echo do_shortcode( '
                      
                      [ajax_load_more_filters id="typefilter" target="my_issues_listing" order="DSC"]

                    ' ); ?>
                                <div class="issues-wrapper">

<!--                                --><?php
//                                $args = array(
//                                    'post_type' => 'issue',
//                                    'post_status' => 'publish',
//                                    'posts_per_page' => -1,
//                                    'orderby' => 'menu_order',
//                                    'order'    => 'ASC'
//                                );
//
//                                $issueposts = new WP_Query( $args );
//                                while ( $issueposts->have_posts() ) : $issueposts->the_post();
//                                    $selectedcategory = get_field('select_category'); ?>
<!--                                    <div class="issue-item">-->
<!--                                        <div class="issue-image">-->
<!--                                            <a href="--><?php //echo esc_url( get_term_link( $selectedcategory ) ); ?><!--"><img src="--><?php //the_field('issue_image'); ?><!--"></a>-->
<!--                                        </div>-->
<!--                                        <div class="issue-info">-->
<!--                                            <h2>--><?php //the_field('issue_title'); ?><!--</h2>-->
<!--                                            <h4>--><?php //the_field('issue_subtitle'); ?><!--</h4>-->
<!--                                            <p class="view-btn"><a href="--><?php //echo esc_url( get_term_link( $selectedcategory ) ); ?><!--">View +</a></p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!---->
<!--                                --><?php //endwhile;
//
//                                wp_reset_postdata(); ?>


<!--                                --><?php //the_content(); ?>

                                <?php echo do_shortcode( '
                      
                      [ajax_load_more id="my_issues_listing" target="typefilter" filters="true" container_type="div" post_type="issue" posts_per_page="8" orderby="menu_order" scroll_distance="-800" button_label="Load more issues" button_loading_label="Loading issues..." no_results_text="No issues to show."]

                    ' ); ?>

                                </div>

                                </div>

							<?php do_action( 'csco_page_content_after' ); ?>

						</div><!-- .page-main -->

						<?php do_action( 'csco_page_main_after' ); ?>

					</div><!-- .page-wrap -->

					<?php do_action( 'csco_page_end' ); ?>

				</article>

				<?php do_action( 'csco_page_after' ); ?>

			<?php

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			endwhile;
			?>

			<?php do_action( 'csco_main_end' ); ?>

		</main>

		<?php do_action( 'csco_main_after' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
