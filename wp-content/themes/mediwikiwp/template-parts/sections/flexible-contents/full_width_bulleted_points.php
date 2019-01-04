<div class="container">
	<div class="row">        
		<div class="download-content">
            <?php
                $heading_type = ''; 
                if ( get_sub_field('heading_type') ) { 
                    $heading_type = 'sub-heading'; 
                } else {
                    $heading_type = 'content-heading'; 
                }
             
                if( get_sub_field('heading_full_width_bulleted_points') ) { 
                    ?>
                    <h3 class="<?php echo $heading_type; ?>"><?php the_sub_field('heading_full_width_bulleted_points'); ?></h3>
                    <?php       
                } 
            ?>
	        <ul class="circle-points">

				<?php
                    if( have_rows('points_full_width_bulleted_points') ) {
                        while ( have_rows('points_full_width_bulleted_points') ) { 
                            the_row(); 
                            ?>
	            			<li><?php the_sub_field('point_full_width_bulleted_points'); ?></li>
	            			<?php 
                        }
                    } 
                ?>

	        </ul>   
	    </div>
	</div>
</div>