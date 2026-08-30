<section class="leftColumn">
    <div class="postList">
        <div class="postBlock">
            <?php $groomingposts = new WP_Query('category_name=grooming&showposts=1');
            if($groomingposts->have_posts()) : while($groomingposts->have_posts()) : $groomingposts->the_post(); ?>

                <?php get_template_part( 'template-parts/sections/post-circular' ); ?>

            <?php endwhile; endif; ?>

            <?php $recentposts = new WP_Query('showposts=1&tag=kings-of-swagger');
            if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); ?>

            <?php get_template_part( 'template-parts/sections/post-square' ); ?>

            <?php endwhile; endif; ?>


        </div>
        <div class="postBlock">
            <?php $foodposts = new WP_Query('category_name=food&showposts=1');
            if($foodposts->have_posts()) : while($foodposts->have_posts()) : $foodposts->the_post(); ?>

                <?php get_template_part( 'template-parts/sections/post-circular' ); ?>

            <?php endwhile; endif; ?>
            <?php $recentposts = new WP_Query('showposts=1&tag=queens-of-swagger');
            if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); ?>

                <?php get_template_part( 'template-parts/sections/post-square' ); ?>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>