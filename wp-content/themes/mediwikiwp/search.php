<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mediwikiwp
 */

get_header();
?>

<style>
    .breadcrumbs_single_card_listing {
        height: auto; 
    }
    .icon-list {
        margin-top: 9px;
        text-decoration: none;
    }
    .icon-list span a {
        text-decoration: none;
    }
</style>

<div class="breadcrumbs_single_card_listing">
    <div class="container">
        <div class="row">                        
            <div class="col-md-9 col-xs-12">               
                <h3 class="banner-heading">
                	<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'mediwikiwp' ), '<span>' . get_search_query() . '</span>' );
					?>
                </h3>                                   
            </div>   
            <div class="col-md-3 col-xs-12">
            	<div class="pull-right icon-list">
                    <span>
                        <a href="javascript:void(0)" id="copy-title-link" onclick="history.go(-1)">Go Back</a>
                    </span>                   
                </div>
            </div>          
        </div>    
    </div>              
</div>

	<section class="grid-area">
    	<div class="container">
        	<div class="row">
				<?php if ( have_posts() ) : ?>
				<section class="single-card-listing-section">
	                <div class="row">
	                	<?php
							/* Start the Loop */
							while ( $query = have_posts() ) { the_post();
						?>
			                    <div class="col-md-12 col-sm-12">
			                        <div class="heading-top-line"></div>
			                        <a class="single-card-listing-heading extra_space" href="<?php echo the_permalink(); ?>">	<?php the_title(); ?>
			                        </a>
			                        <div class="heading-top-line"></div>
			                        <div class="row">
			                            <div class="col-md-12 theme-content">
			                                <br>
			                                <p><?php the_field('editor'); ?></p>
			                            </div>
			                        </div>
			                    </div> 
		            	<?php 
		                	} 
		                ?>                    
	                </div>                      
	            </section>				
				<?php endif;  ?>
					
			</div>
		</div>
	</section>

<?php
get_footer();
?>