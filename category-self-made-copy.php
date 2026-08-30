<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Authentic WordPress Theme
 * @subpackage Templates
 * @version 1.0.0
 * @since Authentic 2.0.0
 */

get_header(); ?>

	<div id="primary">

		<?php// do_action( 'csco_main_before' ); ?>

		<main id="main" class="site-main" role="main">
<!-- Self-made-copy-category-template code starts here -->
<style>
	
	@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap');
	/* @import url(db.onlinewebfonts.com/c/561f38b1f4570de0fb8a39d691ab058c?family=Tungsten+Bold); */

	body{
	    margin: 0;
	}

	h1{
	    font-family: 'Oswald', sans-serif;
	    font-weight: 700;
	    text-transform: uppercase;
	}

	p{
	    font-family: 'Oswald', sans-serif;
	    font-weight: 300;
	}

	span{
	    font-family: 'Oswald', sans-serif;
	    font-weight: 300;
	}

	a{
	    font-family: 'Oswald', sans-serif;
	    font-weight: 300;
	    font-size: 12px;
	}


	.header-grid{
	    display: flex;
	    height: 100vh;
	}

	.col-30{
	    width: 30%;
	}

	.col-70{
	    width: 70%;
	}

	.header-container{
	    background-color: #000;
	    position: relative;
	}

	.header-left-content{
	    width: 70%;
	    position: absolute;
	    top: 50%;
	    transform: translateY(-50%);
	    margin: 0 auto;
	    left: 0;
	    right: 0;
	}

	.header-left-content span{
	    color: white;
	    text-align: center;
	    display: block;
	    font-size: 15px;
	    font-family: 'RingsideWide', sans-serif;
	    font-weight: 500;
	}
	.header-left-content h1{
	    color: white;
	    text-align: center;
	    position: relative;
	    margin: 0%;
	    text-transform: uppercase;
	    font-size: 30px;
	    font-family: 'Oswald', sans-serif;
	    font-weight: 700;
	}

	.header-left-content h1:before{
	    content: "";
	    border-left: 2px solid #fff;
	    height: 100%;
	    position: absolute;
	    top: 122%;
	    left: 50%;
	    z-index: 1;
	    margin: auto;
	}
	.header-left-content p{
	    text-align: center;
	    color: #fff;
	    margin-top: 180px;
	    font-size: 15px;
	    font-family: 'Ringsidecompressed', sans-serif;
	    font-weight: 300;
	}

	.header-left-content a{
	    color: white;
	    text-align: center;
	    display: block;
	    text-decoration: none;
	    text-transform: uppercase;
	    border: 1px solid;
	    padding: 12px 6px;
	    width: 40%;
	    font-family: 'Ringsidecompressed', sans-serif;
	    font-weight: 700;
	    font-size: 12px;
	    margin: auto;
	}

	.header-img-container{
	    background-image: url(../images/header-img.jpg);
	    background-size: cover;
	    background-repeat: no-repeat;
	    background-color: rgb(255, 255, 255);
	    display: flex;
		justify-content: center;
		align-items: flex-end;
		padding: 0 50px;
	    position: relative;
		background-position: center;
		padding-bottom: 70px;
	}
	.header-content{
		width: 100%;
	    position: static;
	    left: 40px;
	    right: 0;
	    bottom: 0;
	}
	.header-content span{
	        color: white;
	        display: block;
	        font-size: 15px;
	        font-family: 'RingsideWide', sans-serif;
	        font-weight: 500;
	}
	.header-content p{
	    color: white;
	    font-size: 18px;
	    font-family: 'Ringsidecompressed', sans-serif;
	    font-weight: 300;
	}
	.header-content h1{
		color: white;
		margin-top: 0;
		font-size: 70px;
		font-family: 'Tungsten', sans-serif;
		font-weight: 700;
		line-height: 40px;
		letter-spacing: -0em;
	}
	.header-img-para{
	    width: 30%;
	    position: static;
	    bottom: 0;
	    color: white;
	    right: 40px;
	    bottom: 40px;
	}

	/* *************Post-grid******************
	******************************* */

	.col-25{
	    width: 25%;
	    border-right: 1px solid;
	}

	.post-container{
	    height: 100%;
	    margin: 50px auto;
	}

	.post-grid{
	    display: flex;
	    width: 80%;
	    margin: auto;
	}

	.post-img img{
	    width: 100%;
	}

	.post-img{
	    position: relative;
	}
	.post-img .post-button{
	    position: absolute;
	    left: 0;
		top: 50%;
		text-transform: uppercase;
		transform: translateY(-50%);
	    right: 0;
	    width: 40%;
	    border: 1px solid #fff;
	    text-align: center;
	    margin: auto;
	    padding: 12px 0px;
	    color: #fff;
	    text-decoration: none;
	    z-index: 1000;
	    font-family: 'Ringsidecompressed', sans-serif;
	    font-weight: 700;
	}

	/* .post-img a:before{
	    content: "";
	    position: absolute;
	    width: 100%;
	    height: 99%;
	    top: 0;
	    bottom: 0;
	    left: 0;
	    right: 0;
	    opacity: 0;
	    background: rgb(0 0 0 / 50%);
	}

	.post-overlay:hover:before{
	    opacity: 1;
	} */


	.post-overlay{
	    width: 100%;
	    background-color: rgba(0, 0, 0, 0);
	    height: 99%;
	    position: absolute;
	    top: 0;
	    opacity: 0;
	    transition: all 0.3s ease-out;
	}

	.post-img .post-overlay:hover{
	    background-color: rgba(0, 0, 0, 0.719);
	    opacity: 1;
	}



	.post-heading{
	    position: relative;
	    margin: 50px auto;
	    width: 80%;
	    font-size: 18px;
	    font-family: 'RingsideWide', sans-serif;
	    font-weight: 700;
	}


	.post-heading::before{
	   content: "";
	   border-bottom: 2px solid #000;
	   width: 100%;
	   height: 100%;
	   position: absolute;
	   margin-top: 15px;
	}

	.post-container h1{
	    height: 100%;
	    margin: 0px;
	    font-size: 25px;
	    font-weight: 700;
	    font-family: 'Oswald', sans-serif;
	    text-transform: uppercase;
		font-style: normal;
	}

	.post-content{
	    margin: 10px 30px;
	    }

	.post-content p{
	    font-size: 15px;
	    font-weight: 300;
	    font-family: 'Ringsidecompressed', sans-serif;
	}


	.post-content span{
	    font-size: 15px;
	    font-weight: 300;
	    font-family: 'Oswald', sans-serif;
	}

	.post-content ul{
	        padding: 0;
	        margin: auto;
	    }
	.post-content li{
	        display: inline-block;
	        vertical-align: middle;
	        font-size: 15px;
	        text-transform: capitalize;
	        font-weight: 700;
	        font-family: 'Ringsidecompressed', sans-serif;
			padding-right: 10px;
	    }
	.post-content li img{
	       width: 60px;
	    }

	/* *************story-sec******************
	******************************* */

	.story-grid{
	    display: flex;
	    height: 500px;
	    background-color: #e3e3e3;
	}
	.story-container{
	    position: relative;
	}

	.story-content{
	    width: 80%;
	    position: absolute;
	    top: 20%;
	    transform: translateY(-20%);
	    margin: 0 auto;
	    left: 20%;
	    right: 0;
	}

	.story-content h1{
	    font-family: 'Tungsten', sans-serif;
	    font-weight: 700;
	    font-size: 35px;
	    margin-bottom: 0;
	    color: #444444; 
	}

	.story-content p{
	    font-size: 16px;
	    font-weight: 300;
	    font-family: 'Ringsidecompressed', sans-serif;
	}

	.story-content p b{
		font-weight: bold;
	}

	.story-content a{
	text-decoration: none;
	text-transform: uppercase;
	color: black;
	border: 2px solid;
	padding: 10px 33px;
	font-weight: 700;
	font-family: 'Ringsidecompressed', sans-serif;
	font-size: 12px;
	}

	.story-content span{
	    font-size: 15px;
	    color: #444444;
	    text-transform: capitalize;
	    font-family: 'Tungsten', sans-serif;
	    font-weight: 700;
	}

	.banner-img{
	    background-image: url(../images/banner.png);
	    margin: 70px auto;
	    width: 70%;
	    background-size: contain;
	    height: 70%;
	    background-repeat: no-repeat;

	}

	/* ************Media-Query-css****************
	************************************ */

	@media only screen and (max-width: 1024px) {

.post-container h1{
	font-size: 30px;
}

.header-grid{
	height: 50vh;
  }
  
  .header-left-content h1{
	font-size: 20px;
  }

  .header-left-content p{
	font-size: 12px;
	margin-top: 120px;
  }

  .header-content h1{
	font-size: 40px;
  }

  .header-img-para{
	width: 40%;
	right: 0px;
  }
  .header-left-content a{
	width: 60%;
  }

  .post-grid{
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  }

  .col-25:nth-child(2){
	border: 0;
}

	.col-25:nth-child(4){
	border: 0;
}

  .col-25{
	width: 100%;
  }

  
.post-container{
margin: 100px auto;
}

  .story-grid{
	height: 370px;
  }

  .story-content h1{
	font-size: 40px;
  }

  .story-content span{
	font-size: 12px;
  }



}

@media only screen and (max-width: 960px) {
.header-grid{
height: 50vh;
}

.header-left-content h1{
font-size: 20px;
}

.header-left-content p{
font-size: 12px;
margin-top: 120px;
}

.header-content h1{
font-size: 40px;
}

.header-img-para{
width: 40%;
right: 0px;
}
.header-left-content a{
width: 60%;
}



.post-container{
margin: 50px auto;
}

.post-grid{
display: grid;
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}

.col-25:nth-child(2){
border: 0;
}

.col-25:nth-child(4){
border: 0;
}

.col-25{
width: 100%;
}

.story-grid{
height: 370px;
}

.story-content h1{
font-size: 40px;
}

.story-content span{
font-size: 12px;
}

}

@media only screen and (max-width: 668px) {


.header-grid{
	flex-direction: column-reverse;
	height: 100%;
}

.header-container{
	width: 100%;
}
.header-left-content{
width: 70%;
position: static;
top: 0%;
transform: translateY(0%);
margin: 30px auto;
left: 0px;
right: 0px;
}

.header-left-content h1:before{
height: 45%;
position: absolute;
top: 100%;
}
.header-left-content p{  
margin-top: 30px;
}
.header-left-content h1{
	font-size: 18px;
}
.header-left-content span{
	font-size: 10px;
}
.header-left-content a{
padding: 12px 0px;
width: 50%;
}
.header-img-container{
	width: 100%;
	display: inline-block;
	padding: 0;
}


.header-content{
position: static;
margin-top: 80%;
margin-left: 20px;
}
.header-content h1{
	margin-bottom: 0;
}
.header-content span{
	font-size: 10px;
}

.header-img-para{
	width: 80%;
	position: static;
	margin-left: 20px;
}

.post-content{
	margin: 10px 10px;
}

.col-25{
	border: 0;
}

.story-grid{
	height: auto;
	display: inline-block;
}
.story-container{
	width: 100%;
}
.story-banner{
	width: 100%;
}
.story-content{
width: 80%;
position: static;
text-align: center;
transform: translateY(0%);
margin: auto;
margin-bottom: 60px;
}

.story-content h1{
font-size: 40px;
margin: 20px auto;
}

.banner-img{
margin: 20px auto;
height: 30vh;
width: 100%;
}


}

/* Author Styles */
.author-avatar{
	border-radius: 50%;
    overflow: hidden;
    vertical-align: middle;
	width: 2em;
}

</style>
    <div class="header-grid">
	<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'self-made-copy',
            'post_status' => 'publish',
            'posts_per_page' => 1,
			'offset' => 1,
        ));
        ?>
	<?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-30 header-container">
                <div class="header-left-content">
               <span><?php echo get_cat_name( $category_id = 9530 );?></span>
                <h1><?php the_title()?></h1>
                    <p><?php the_excerpt()?></p>
                    <a href="<?php the_permalink()?>">read store</a>
                </div>
            </div>
			<?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>

		<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'self-made-copy',
            'post_status' => 'publish',
            'posts_per_page' => 1,
			'offset' => 0,
        ));
        ?>
		<?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-70 header-img-container" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')">
                <div class="header-content">
                <span href="#"><?php echo get_cat_name( $category_id = 9530 );?></span>  
                <h1><?php the_title();?></h1>
            </div>
            <div class="header-img-para">
                <p><?php the_excerpt(); ?></p>
                
        </div>
		<?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
    </div>
</div>  

<?php
        // the query
        $the_query = new WP_Query(array(
            'category_name' => 'self-made-copy',
            'post_status' => 'publish',
            'posts_per_page' => 4,
            'offset'=>2,
        ));
        ?>
<div class="post-container">
    <h4 class="post-heading" >
        RECENT SELFMADES
    </h4>
    <div class="post-grid">
	<?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="col-25">
                <div class="post-img">
					<?php the_post_thumbnail('thumbnail'); ?>
                        <div class="post-overlay">
                            <a class="post-button" href="<?php the_permalink(); ?>">read more</a>
                        </div>
                </div>
                <div class="post-content" >
                    <span><?php the_date();?></span>
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                    <ul>
					<a href="<?php get_the_author_meta('url');?>">
								<li><div class="author-avatar"><?php echo get_avatar( get_the_author_meta()); ?></div></li>
                                <li>By <?php the_author_meta('display_name')?></li>
							</a>
                    </ul>
                   
                </div>
            </div>
			<?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No News'); ?></p>
        <?php endif; ?>
        </div>
    </div>

    <div class="story-grid">
            <div class="col-30 story-container">
                <div class="story-content">
                    <h1><?php echo get_cat_name( $category_id = 9530 );?></h1>
                    <p><?php echo category_description(9530);?></p>
                        <a href="https://app.involve.me/swagger/signup-to-swagger">subscribe</a>
                </div>
            </div>
                <div class="col-70 story-banner">
					<div class="banner-img" style="background-image: url('https://www.swaggermagazine.com/home/wp-content/uploads/2022/04/side-banner.jpg')">
  					</div>
                </div>
        </div>

		<?php 
			//the query
			$the_query = new WP_Query(array(
				'category_name' => 'self-made-copy',
				'post_status' => 'publish',
				'posts_per_page' => 4,
				'offset' => 7,
			));

			//$the_query = new WP_Query('order=asc&orderby=meta_value&meta_key=date&posts_per_page=4&offset=4&paged=' . $paged); 
		?>

        <div class="post-container">
            <div class="post-grid">
			<?php if ($the_query->have_posts()) : ?>
            	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-25">
                        <div class="post-img">
                            <?php the_post_thumbnail('thumbnail');?>
                                <div class="post-overlay">
                                    <a class="post-button" href="<?php the_permalink(); ?>">read more</a>
                                </div>
                        </div>
                        <div class="post-content" >
                            <span><?php the_date(); ?></span>
                            <h1><?php the_title();?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <ul>
								<a href="<?php get_the_author_meta('url');?>">
								<li><div class="author-avatar"><?php echo get_avatar( get_the_author_meta()); ?></div></li>
                                <li>By <?php the_author_meta('display_name')?></li>
							</a>
                            </ul>
                           
                        </div>
                    </div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php __('No News'); ?></p>
			<?php endif; ?>
                </div>
            </div>
        



<!-- Self made code end -->


			<?php //do_action( 'csco_main_start' ); ?>

			<?php //get_template_part( 'template-parts/loop/archive' ); ?>

			<?php //do_action( 'csco_main_end' ); ?>

		</main>

		<?php do_action( 'csco_main_after' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
