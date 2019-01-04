<div class="container">
	<div class="row">
		<section class="content-section">
	        <div class="heading-top-line"></div>
	        <?php 
                if( get_sub_field('heading_heading_and_image') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_heading_and_image'); ?></h3>
                    <?php 
                } 
            ?>
	        <div class="col-md-12">
	        	<?php 
	                if( get_sub_field('image_heading_and_image') ) { 
	                    ?>
            			<img src="<?php the_sub_field('image_heading_and_image'); ?>" alt="Organs Tissues" class="img-responsive organs_tissue_large_img"> 
            			<?php 
	                } 
	            ?>                        
	        </div>                
	    </section>
	</div>
</div>