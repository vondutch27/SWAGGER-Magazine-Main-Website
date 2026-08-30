<?php $recentposts = new WP_Query('showposts=1&offset=1&tag=featured');
if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); ?>
<div class="postBlock" style="background-image: url(<?php
the_post_thumbnail_url( apply_filters( 'csco_post_tiles_thumbnail_size', 'csco-560-square' ) );
?>);">
    <div class="captionWrapper">
        <div class="category"><?php csco_get_post_meta( 'category' ); ?></div>
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        <div class="time"><?php csco_get_post_meta( array( 'date' ) ); ?></div>
    </div>
</div>
<?php endwhile; endif; ?>
<div class="latestPosts">
    <h2><span>Latest</span></h2>
    <ul>
        <?php $recentposts = new WP_Query( array( 'tag__not_in' => array( 1480, 1531, 1801 ), 'posts_per_page' => 4 ) );

        if($recentposts->have_posts()) : while($recentposts->have_posts()) : $recentposts->the_post(); ?>
            <li>
                <div class="postThumb">
                    <a href="<?php the_permalink() ?>"><?php
                        the_post_thumbnail( apply_filters( 'csco_post_tiles_thumbnail_size', 'csco-320-square' ) );
                        ?></a>
                </div>
                <div class="postInfo">
                    <div class="category"><?php csco_get_post_meta( 'category' ); ?></div>
                    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                </div>
            </li>
        <?php endwhile; endif; ?>
    </ul>
</div>