<?php $recentposts = new WP_Query('showposts=1&tag=featured');

if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); ?>
    <section class="topBanner" style="background-image: url(<?php
    the_post_thumbnail_url( apply_filters( 'csco_post_tiles_thumbnail_size', 'csco-1160-square' ) );
    ?>);">
        <!--<div class="captionTop">
            <div class="date"><?php /*csco_get_post_meta( array( 'date' ) ); */?></div>
        </div>-->
        <div class="captionWrapper">
            <div class="category"><?php csco_get_post_meta( 'category' ); ?></div>
            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            <div class="author"><i class="icon icon-menu"></i><?php csco_get_post_meta( array( 'author' ) ); ?></div>
        </div>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
        <div class="latestSwag">
                    <span>The<br>
                    Latest Swag<br>
                    Worthy</span>
        </div>
        <div class="trendingPosts">
            <div class="posts-widget">
                <h4 class="title-block title-widget">Trending:</h4>
                <ul>
                    <?php $trending1 = new WP_Query('showposts=1&tag=trending1');
                    if($trending1->have_posts()) : while($trending1->have_posts()) : $trending1->the_post(); ?>
                    <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>

                    <?php $trending2 = new WP_Query('showposts=1&tag=trending2');
                    if($trending2->have_posts()) : while($trending2->have_posts()) : $trending2->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>

                    <?php $trending3 = new WP_Query('showposts=1&tag=trending3');
                    if($trending3->have_posts()) : while($trending3->have_posts()) : $trending3->the_post(); ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_query(); ?>
                </ul>
            </div>
        </div>
    </section>