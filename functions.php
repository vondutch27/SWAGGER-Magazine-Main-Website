<?php
/**
 * Include Theme Functions
 *
 * @package Authentic Child Theme
 * @subpackage Functions
 * @version 1.0.0
 */

/**
 * Setup Child Theme
 */
function csco_setup_child_theme() {
	// Add Child Theme Text Domain.
	load_child_theme_textdomain( 'authentic', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'csco_setup_child_theme', 99 );

/**
 * Enqueue Child Theme Assets
 */
function csco_child_assets() {
	if ( ! is_admin() ) {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style( 'csco_child_css', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(), $version, 'all' );
	}
}

add_action( 'wp_enqueue_scripts', 'csco_child_assets', 99 );

/**
 * Add your custom code below this comment.
 */

register_sidebar(
    array(
        'name'          => esc_html__( 'Trending Posts', 'authentic' ),
        'id'            => 'trending-posts',
        'before_widget' => '<div class="posts-widget %1$s %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="title-block title-widget">',
        'after_title'   => '</h4>',
    )
);
//Allow Contributors to Add Media
if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
$contributor = get_role('contributor');
$contributor->add_cap('upload_files');
}

/**
 * Woocommerce updates
 */
//remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart', 20 );


////remove price from product loop
//remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
//
////remoe prdouct link from product loop
//remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
//remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
//
////remove link from product title and add it plain
//remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
//add_action('woocommerce_shop_loop_item_title', 'swaggerProductsTitle', 10 );
//function swaggerProductsTitle() {
//    echo '<h2 class="woocommerce-loop-product__title">'.get_the_title().'</h2>';
//}

if ( ! function_exists( 'title_before_shop_loop' ) ) {
/**
* Adding additional title before shop loop
*/
function title_before_shop_loop() {
	if ( is_shop() ) {
	$current_page = get_query_var( 'paged', 1 );
	if ( $current_page == 0 ){
		echo '<h2 style="clear: both; text-align: center; margin-bottom: 25px; text-transform: uppercase;">' . date('F') .esc_html__( ' Featured Products' ) . '</h2>';
	}
	}
} 
add_action( 'woocommerce_before_shop_loop', 'title_before_shop_loop', 40 );
}

// Type Taxonomy for Issues
add_action( 'init', 'issue_type_taxonomy', 0 );

//create a custom taxonomy name it "type" for your posts
function issue_type_taxonomy() {

    $labels = array(
        'name' => _x( 'Types', 'taxonomy general name' ),
        'singular_name' => _x( 'Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Types' ),
        'all_items' => __( 'All Types' ),
        'parent_item' => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ),
        'update_item' => __( 'Update Type' ),
        'add_new_item' => __( 'Add New Type' ),
        'new_item_name' => __( 'New Type Name' ),
        'menu_name' => __( 'Types' ),
    );

    register_taxonomy('types',array('deals'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'type' ),
    ));
}

// Custom Post Type for Issues
add_action( 'init', 'issue' );
function issue() {
    register_post_type( 'issue',
        array(
            'labels' => array(
                'name' => __( 'Issues' ),
                'singular_name' => __( 'issue' ),
                'add_new' => __( 'Add New Issue' )
            ),
            'public' => true,
            'supports' => array( 'title', 'thumbnail', 'editor', 'custom-fields'),
            'taxonomies' => array('types'),
            'menu_icon' => get_stylesheet_directory_uri() . '/assets/images/icon-slider.png',
        )
    );
}




// Custom By Shoaib
// 
// Add meta box for Date (simple text field)
add_action( 'add_meta_boxes', function() {
	add_meta_box(
		'issue_date_meta_box',
		__( 'Date', 'authentic' ),
		function( $post ) {
			$value = get_post_meta( $post->ID, '_issue_date', true );
			wp_nonce_field( 'save_issue_date_meta', 'issue_date_nonce' );
			echo '<input type="text" name="issue_date_field" id="issue_date_field" value="' . esc_attr( $value ) . '" class="widefat" placeholder="Enter Date" />';
		},
		'issue',
		'side',
		'default'
	);
});

// Save the Date meta field
add_action( 'save_post_issue', function( $post_id ) {
	if ( ! isset( $_POST['issue_date_nonce'] ) || ! wp_verify_nonce( $_POST['issue_date_nonce'], 'save_issue_date_meta' ) ) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( wp_is_post_revision( $post_id ) ) return;

	if ( isset( $_POST['issue_date_field'] ) ) {
		update_post_meta( $post_id, '_issue_date', sanitize_text_field( $_POST['issue_date_field'] ) );
	}
});











// Register Swagger Mobile Menu
function swagger_mobile_menu(){
    register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
}

add_action('init', 'swagger_mobile_menu');
