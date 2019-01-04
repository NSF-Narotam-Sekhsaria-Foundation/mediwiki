<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mediwikiwp
 */

get_header();
?>
		<?php
			while ( have_posts() ) {
				the_post();

				//get_template_part( 'template-parts/content', 'page' );

				//BANNERS SECTION
				if ( get_field('banner') && get_field( 'banner_layout' ) == 'banner_layout_1' ) { 
            		get_template_part( 'template-parts/sections/banners/banner_layout_1' );
    			}

    			if ( get_field('banner') && get_field( 'banner_layout' ) == 'banner_layout_2' ) { 
            		get_template_part( 'template-parts/sections/banners/banner_layout_2' );
    			}

    			if ( get_field('banner') && get_field( 'banner_layout' ) == 'banner_layout_3' ) { 
            		get_template_part( 'template-parts/sections/banners/banner_layout_3' );
    			}

    			if ( get_field('banner') && get_field( 'banner_layout' ) == 'banner_layout_4' ) { 
            		get_template_part( 'template-parts/sections/banners/banner_layout_4' );
    			}    			

    			if ( get_field('banner') && get_field( 'banner_layout' ) == 'banner_layout_5' ) { 
            		get_template_part( 'template-parts/sections/banners/banner_layout_5' );
    			}

    			if ( !get_field('banner')) { 
            		get_template_part( 'template-parts/sections/banners/banner_default_layout' );
    			}
    			?>
		    	<section class="grid-area">
		    		<div class="container">
		    			<div class="box-address">
		    				<?php the_content(); ?>
		    			</div>
		    		</div>
	                <?php
	                	//FLEXIBLE CONTENT SECTIONS
		    			while(the_flexible_field("content_layout")) {
		    				if( get_row_layout() == 'bulleted_list' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/bulleted_list' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_1' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_1' );
		    				}
		    				if( get_row_layout() == '2_column_section_type_1_button' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_1_button' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_2' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_2' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_3' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_3' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_4' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_4' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_5' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_5' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_6' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_6' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_7' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_7' );
		    				}

		    				if( get_row_layout() == '2_column_section_type_8' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_type_8' );
		    				}

		    				if( get_row_layout() == 'full_width_bulleted_content_button' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/full_width_bulleted_content_button' );
		    				}

		    				if( get_row_layout() == 'full_width_bulleted_points' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/full_width_bulleted_points' );
		    				}

		    				if( get_row_layout() == '2_column_section_full_width_background' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_full_width_background' );
		    				}

		    				if( get_row_layout() == '2_column_section_right_column_background' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_section_right_column_background' );
		    				}

		    				if( get_row_layout() == 'points_full_width_background' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/points_full_width_background' );
		    				}

		    				if( get_row_layout() == '2-column-content-img' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2-column-content-img' );
		    				}

		    				if( get_row_layout() == 'heading_and_image' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/heading_and_image' );
		    				}

		    				if( get_row_layout() == 'full_width_content_button' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/full_width_content_button' );
		    				}

		    				if( get_row_layout() == 'full_width_content' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/full_width_content' );
		    				}

		    				if( get_row_layout() == 'button_link' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/button_link' );
		    				}

		    				if( get_row_layout() == 'single_column_section' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/single_column_section' );
		    				}

		    				if( get_row_layout() == 'dos_and_donts_2_column_section' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/dos_and_donts_2_column_section' );
		    				}

		    				if( get_row_layout() == 'address_phone_number_section' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/address_phone_number_section' );
		    				}

		    				if( get_row_layout() == 'grid_images_section' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/grid_images_section' );
		    				}

		    				if( get_row_layout() == 'grid_images_4_column_section' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/grid_images_4' );
		    				}

		    				if( get_row_layout() == '2_column_content' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_content' );
		    				}

		    				if( get_row_layout() == '2_column_content_and_image' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/2_column_content_and_image' );
		    				}

	    					//FLEXIBLE CONTENT TABLES
		    				if( get_row_layout() == 'table_type_content' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/tables/table_type_content' );
		    				}

		    				if( get_row_layout() == 'table_image_type_1' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/tables/table_image_type_1' );
		    				}

		    				if( get_row_layout() == 'table_image_type_2' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/tables/table_image_type_2' );
		    				}

		    				if( get_row_layout() == '2_table_in_1_row' ) { 
		            			get_template_part( 'template-parts/sections/flexible-contents/tables/2_table_in_1_row' );
		    				}
		    			}
		    		?>			    		
			    </section>
				<?php		
			} // End of the loop.
		?>		

<?php
get_footer();
?>
