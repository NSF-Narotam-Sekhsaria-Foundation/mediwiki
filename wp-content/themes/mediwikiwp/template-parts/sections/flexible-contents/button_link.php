<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="container padding-left-0">
        	<?php
        		$add_margin_top = get_sub_field('add_margin_top');
        		$add_margin_bottom = get_sub_field('add_margin_bottom');
        	?>
            <div class="box-link" style="margin-top:<?php echo $add_margin_top; ?>px; margin-bottom:<?php echo $add_margin_bottom; ?>px;">
            	<?php 
                	if( get_sub_field('button_links') ) { 
                    	?>
                		<a href="<?php the_sub_field('button_links'); ?>"><?php the_sub_field('button_label'); ?> <span class="fa fa-angle-right"></span></a>
                		<?php 
                	} 
            	?>
            </div>     
        </div>
    </div>
</div>