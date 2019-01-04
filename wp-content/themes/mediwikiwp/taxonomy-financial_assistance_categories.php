<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mediwikiwp
 */

get_header();
?>

<?php $archive_title = single_cat_title( '', false ); ?>

<div class="breadcrumbs_full">
    <div class="container">
    <div class="row">                        
        <div class="col-sm-12">
            <h3><?php echo $archive_title; ?></h3>
        </div>  
    </div>
    </div>
</div>

<section class="grid-area custom-padding-grid">
    <div class="container">
        <div class="row">
        	<?php 
        		if ( have_posts() ) { 
        			while ( have_posts() ) {
        				the_post();
        				?>
        				<div class="col-md-4 col-sm-12 padding-left-0 padding-right-0">
                            <div class="item_boxes">
    			                <a href="<?php echo get_the_permalink(); ?>">
    			                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive">
    			                    <h3><?php the_title(); ?></h3>
    			                </a>
    			                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
			            </div>
        				<?php
        			}
        			?>
        			<div class="col-sm-12">
        				<?php the_posts_navigation( array('screen_reader_text' => __( 'Posts Navigation' )) ); ?>
        			</div>
        			<?php
        		} else {
        			?>
        			<div class="col-sm-12">
		                <p>No posts found</p>
		            </div>
        			<?php
        		}
        	?>	
        </div>
    </div>
</section>

<?php get_footer(); ?>