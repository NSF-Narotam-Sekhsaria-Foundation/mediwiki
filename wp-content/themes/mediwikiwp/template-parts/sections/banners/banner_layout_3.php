<div class="breadcrumbs_one_column">
    <div class="container">
        <div class="row">                        
            <div class="col-md-8 col-xs-12">
                <div class="links_area"> 
                    <?php 
                        if(function_exists('bcn_display')) {
                            bcn_display();
                        }
                    ?>  
                </div>
                    <?php 
                        if( get_field('heading_banner_layout_3') ) { 
                            ?>
                            <h3 class="banner-heading"><?php the_field('heading_banner_layout_3'); ?></h3>
                            <?php 
                        } 
                    ?>
                <div class="banner-content">
                    <?php
                        if( get_field('content_banner_layout_3') ) { 
                            ?>
                            <?php the_field('content_banner_layout_3'); ?>
                            <?php 
                        }    
                    ?>    
                </div>                                           
            </div> 
            <div class="col-md-4 col-xs-12">
            </div> 
        </div>    
    </div>              
</div>