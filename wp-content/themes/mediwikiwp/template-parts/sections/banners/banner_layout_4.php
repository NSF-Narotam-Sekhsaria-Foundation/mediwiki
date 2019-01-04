<div class="breadcrumbs_illustration">
    <div class="container-fluid">
        <div class="row">                        
            <div class="col-md-6 col-xs-6 padding-left-0 mobile-width-full"> 
                <div class="paddings">
                    <?php 
                        if( get_field('heading_banner_layout_4') ) { 
                            ?>
                            <h3 class="banner-heading"><?php the_field('heading_banner_layout_4'); ?></h3>
                            <?php 
                        } 
                    ?>
                    <div class="banner-content">
                        <?php 
                            if( get_field('content_banner_layout_4') ) {                                 
                                the_field('content_banner_layout_4'); 
                            } 
                        ?>
                    </div> 
                </div>                    
            </div> 
            <div class="col-md-6 col-xs-6 mobile-width-full" 
                style="background: url(<?php the_field('background_image_banner_layout_4'); ?>);
                height: 300px;
                background-size: <?php the_field('background_size_banner_layout_4'); ?>;
                background-repeat: no-repeat;"> 
            </div> 
        </div>    
    </div>              
</div>