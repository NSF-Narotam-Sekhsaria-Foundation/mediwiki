<div class="breadcrumbs_two_grey">
    <div class="container">
        <div class="row">                        
            <div class="col-md-8 col-xs-12">  
                <?php 
                    if( get_field('heading_banner_layout_1') ) { 
                        ?>
                        <h1 class="banner-heading"><?php the_field('heading_banner_layout_1'); ?></h1>
                        <?php 
                    } 
                ?>
                <div class="banner-content">
                    <?php 
                        if( get_field('content_banner_layout_1') ) { 
                            ?>    
                            <?php the_field('content_banner_layout_1'); ?>
                            <?php 
                        } 
                    ?>   
                </div>                                           
            </div> 
            <div class="col-md-4 col-xs-12">
                <?php 
                        if( get_field('image_banner_layout_1') ) { 
                            ?>
                            <img src="<?php the_field('image_banner_layout_1'); ?>" alt="" class="img-responsive save-lives">
                            <?php 
                        } 
                    ?>
            </div> 
        </div>    
    </div>              
</div>