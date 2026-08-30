<aside class="rightColumn">
    <div class="kingSwag" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/kings-of-swag_c.jpg);">
        <div class="caption">
			<h3>The Men <br>of Now</h3>
            <h4>Where premium brands meet modern men</h4>
            
        </div>
        <?php
        // Get the ID of a given category
        $category_id = get_cat_ID( 'Kings of Swagger' );

        // Get the URL of this category
        $category_link = get_category_link( $category_id );
        ?>

        <a class="link" href="<?php echo esc_url( $category_link ); ?>">King Swag</a>
    </div>
</aside>