<section class="banners">
    <div class="container-fluid">
        <div class="row banner-background-color">
            <div class="col-md-9 col-sm-12">
                <?php 
                    if( get_field('banner_image') ) { 
                        ?>
                        <div class="banner">
                            <img src="<?php the_field('banner_image'); ?>" class="img-responsive" alt="">
                        </div>
                        <?php 
                    } 
                ?>
            </div>
            <div class="col-md-3 col-sm-12 home_icon_none_mobile">
                <?php
                    if( have_rows('banner_icons') ) {
                        while ( have_rows('banner_icons') )  {
                            the_row(); 
                            ?>
                            <div class="row beside_banners">
                                <div class="col-md-12">
                                    <img src="<?php the_sub_field('icon'); ?>"class="img-responsive banner-icon-image" alt=""> <p><?php the_sub_field('description'); ?></p>
                                </div>                                
                            </div>
                            <?php  
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>