<header>
    <div class="authorThumb">
        <a href="<?php the_permalink() ?>"><?php
            the_post_thumbnail( apply_filters( 'csco_post_tiles_thumbnail_size', 'csco-320-square' ) );
            ?></a>
    </div>
    <div class="postInfo">
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        <div class="time"><i class="icon icon-menu"></i><?php csco_get_post_meta( array( 'date' ) ); ?></div>
    </div>
</header>