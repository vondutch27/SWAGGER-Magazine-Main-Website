<div class="postThumb" style="background-image: url(<?php
the_post_thumbnail_url( apply_filters( 'csco_post_tiles_thumbnail_size', 'csco-560-square' ) );
?>);">
    <a href="<?php the_permalink() ?>"></a>
    <div class="category"><?php csco_get_post_meta( 'category' ); ?></div>
</div>
<footer>
    <div class="date"><?php csco_get_post_meta( array( 'date' ) ); ?></div>
    <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
    <div class="author"><i class="icon icon-menu"></i><?php csco_get_post_meta( array( 'author' ) ); ?></div>
</footer>