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

<?php 
	$archive_title = post_type_archive_title( '', false ); 
?>

<section id="page">
    <aside class="mobile_filter">
        <div class="movile_filter_heading">
            <h3>Filters</h3> <span id="mobile_filter_close">Close</span>
        </div>
        <form action="#" class="filter_form" onsubmit="return false;">
        	<?php 
				$current_post_type = get_post_type( get_the_ID() );

				// Get all the taxonomies for this post type
				$taxonomies = get_object_taxonomies($current_post_type, 'objects' );
				// print_r($taxonomies);

				$radioTaxonomies = get_option('radio_button_for_taxonomies_options');
				// print_r($radioTaxonomies);
			?>
			
	    	<?php 
				foreach( $taxonomies as $taxonomy )  { 
					?>
					<?php 
						$terms = get_terms( $taxonomy->name, array( 'hide_empty' => false ) ); 
						if ( $terms ) {
							?>
							<h3>
								<?php 
									echo '' . $taxonomy->labels->name . ''; 
								?>										
							</h3>
							
							<?php
								foreach( $terms as $term ) {
									// print_r($term);
									if ( in_array( $taxonomy->name, $radioTaxonomies['taxonomies'] ) ) {
										$input_type = 'radio';
										$class = 'checkmark_radio';
									} else {
										$input_type = 'checkbox';
										$class = 'checkmark';
									}
                    				?>	
                    				<div class="form-group"> 
						                <label class="section_check"><?php echo $term->name; ?>
										  <input type="<?php echo $input_type; ?>" class="attr_type" name="<?php echo $taxonomy->name ?>[]" value="<?php echo $term->term_id; ?>">
										  <span class="<?php echo $class; ?>"></span>
										</label>
						            </div>
                        			<?php 
                				}
                			?>
                			
                			<?php 
                				if ( $taxonomy === end( $taxonomies ) ) {
                					// Do nothing
                				} else {
                					echo "<hr>";
                				}
                			?>
	            			
	            			<?php
	            		}
	            	?>
	    			<?php
				}
	    	?>
            
            <div class="clearall">
                <input type="reset" name="" value="Clear All" class="clearall_button">
            </div> 

            <div class="mobile_filter_buttons">
                <div class="cancel_mobile">
                    <input type="reset" name="" value="Cancel" class="cancel_button">
                </div> 

                <div class="apply_mobile">
                    <input type="submit" name="" value="Apply" class="apply_button">
                </div>
            </div>
        </form>
    </aside>


    <div id="main">
	    <?php if (have_posts()) : ?>

	        <div class="breadcrumbs">
	            <div class="col-sm-5">
	                <h3><?php echo $archive_title; ?> <span id="filters"><a href="javascript:void(0)">Filters</a></span></h3>                        
	            </div>
	            <div class="col-sm-7">
	                <form action="#" class="search_form" onsubmit="return false;">
	                    <div class="col-xs-6 padding-left-0 padding-right-0">
	                        <input type="search" name="search" required="" placeholder="Search here" class="form-control search_field">
	                        <span class="fa fa-times" id="reset-search-box"></span>
	                    </div>
	                    <div class="col-xs-6 padding-left-0 padding-right-0">
	                        
	                        <input type="reset" class="reset"> 
	                        <!-- <input type="submit" class="search_button" name="" value="Search">  -->
	                        <button class="search_button" name="" value="Search"><span class="fa fa-search"></span> <span class="search_name">Search</span></button>
                            <a href=""><button type="button" class="download_button"><span class="download_name">Download</span></button></a>

                </div>
	                </form>                
	            </div>
	        </div>

	        <div class="clearfix"></div>

	        <div class="content-area">
	            <div class="container">
	                <?php the_archive_description( '<div class="mobile-none">', '</div>' ); ?>

	                <!-- <p class="light">Results for <strong>‘Blood Banks’ , ‘Whole Blood’ &amp; ‘Western’</strong> - Showing 10 results</p> -->

	                <!-- <p class="light">Results for '<span id="results_term"><?php echo $archive_title; ?></span>'</p> -->

	                <hr>
	                <div class="toggle-area" id="result">
		                
	                </div>
	            </div> 
	        </div>

	    <?php endif; ?>
    </div>   
</section>

<div id="snackbar">Link Copied!</div>    

<?php get_footer(); ?>

<script type="text/javascript">

	var archive_title = '<?php echo $archive_title; ?>';
	var post_type = '<?php echo $current_post_type; ?>';
	var filters = '';
	var search_term = '';

	// Load first set of results
	getResults(filters, search_term);

	// Filters
   	jQuery('.filter_form input[type="checkbox"], .filter_form input[type="radio"]').change(function(event) {
   		search_term = jQuery.trim(jQuery('.search_field').val());
   		filters = jQuery('.filter_form').serialize();

   		// Filter Loader Start
		jQuery('.loaderFullPage').show();
		jQuery('#page').css('opacity', '0.3');

		jQuery.post(ajax_url, {
	       	action: 'ajax_archive_operations',
	       	search_term : search_term,
	   	},
	    function(data, status) {
	    	jQuery('.loaderFullPage').hide();	
	    	jQuery('#page').css('opacity', '1');	       	
	   	});

   		getResults(filters, search_term);
   	});

   	// Search
	jQuery('.search_button').click(function(event) {
		search_term = jQuery.trim(jQuery('.search_field').val());
		if ( search_term == '' ) {
			jQuery('#results_term').text(archive_title);
			// Search Loader Start
			jQuery('.loaderFullPage').hide();	
			// Search Loader Start		
		} else {
			jQuery('#results_term').text(search_term);
			// Search Loader Start
			jQuery('.loaderFullPage').show();
			jQuery('#page').css('opacity', '0.3');

			jQuery.post(ajax_url, {
		       	action: 'ajax_archive_operations',
		       	search_term : search_term,
		   	},
		    function(data, status) {
		    	jQuery('.loaderFullPage').hide();	
		    	jQuery('#page').css('opacity', '1');	       	
		   	});
			
			// Search Loader End
		}
		getResults(filters, search_term);
	});

	// Reset Search
	jQuery('#reset-search-box').click(function(event) {
		search_term = '';
		jQuery('.search_field').val(search_term);
		jQuery('#results_term').text(archive_title);
		// Reset Loader Start
		jQuery('.loaderFullPage').show();
		jQuery('#page').css('opacity', '0.3');

		jQuery.post(ajax_url, {
	       	action: 'ajax_archive_operations',
	       	search_term : search_term,
	   	},
	    function(data, status) {
	    	jQuery('.loaderFullPage').hide();	
	    	jQuery('#page').css('opacity', '1');	       	
	   	});
		getResults(filters, search_term);
	});
    //Download
       jQuery('.download_button').click(function(event) {
             window.open("http://mediwiki.org.in/wp-content/uploads/List/<?php echo $current_post_type; ?>.xlsx");
        });


    // Reset
	jQuery('.clearall_button').click(function(event) {
		jQuery('.search_field').val('');
		jQuery('#results_term').text(archive_title);
		filters = '';
		search_term = '';
		getResults(filters, search_term);
	});

	jQuery('.cancel_button').click(function(event) {
		jQuery('#mobile_filter_close').trigger('click');
		jQuery('.clearall_button').trigger('click');
	});

	// Results
   	function getResults(filters, search_term) {
   		jQuery.post(ajax_url, {
	       	action: 'ajax_archive_operations',
	       	post_type : post_type,
	       	search_term : search_term,
	       	filters : filters
	   	},
	    function(data, status) {
	       	jQuery("#result").html(data);
	   	});
   	}

   	// Pagination
   	$(document).on('click', '#result .load-more', function() { 
   		jQuery(this).css('pointer-events', 'none');
   		jQuery('.loader').show();
	   	jQuery.post(ajax_url, {
	       	action: 'ajax_archive_operations',
	       	offset: jQuery('.load-more').attr('data-post'),
	       	post_type : post_type,
	       	search_term : search_term,
	       	filters : jQuery('.filter_form').serialize()
	   	},
	    function(data, status) {
	    	jQuery('.loader').hide();
	       	jQuery("#result .ajax-pagination").remove();
	       	jQuery("#result").append(data);
	   	});
	});
</script>