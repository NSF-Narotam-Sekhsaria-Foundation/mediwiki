<div class="breadcrumbs_back_image" 
    style=" height: auto;
    background: url('<?php the_field('background_image_banner_layout_2'); ?>');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    width: 100%;
    overflow: hidden;
    ">
    <div class="container-fluid">
        <div class="row">                        
            <div class="col-md-8 col-xs-12 padding-left-0"> 
                <div class="box-opacity">
                    <?php 
                        if( get_field('heading_banner_layout_2') ) { 
                            ?>
                            <h3 class="banner-heading"><?php the_field('heading_banner_layout_2'); ?></h3>
                            <?php 
                        } 
                    ?>
                    <div class="banner-content">
                        <?php
                            if( get_field('content_banner_layout_2') ) { 
                                ?>
                                <?php the_field('content_banner_layout_2'); ?>
                                <?php 
                            }    
                        ?>
                    </div>
                </div>                                     
            </div> 
            <div class="col-md-4 col-xs-12">
                
            </div> 
        </div>    
    </div>              
</div>