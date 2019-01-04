<div class="breadcrumbs_two_column">
    <div class="container">
        <div class="row">                        
            <div class="col-md-7 col-sm-6 pb-30">
                <div class="links_area">
                    <?php 
                        if(function_exists('bcn_display')) {
                            bcn_display();
                        }
                    ?>
                </div>
                <?php 
                    if( get_field('heading_banner_layout_5') ) { 
                        ?>
                        <h3 class="banner-heading"><?php the_field('heading_banner_layout_5'); ?></h3>
                        <?php 
                    } 
                ?> 
                <ol type="1" class="banner-point">
                  <?php
                    if( have_rows('banner_points') ) {
                        while ( have_rows('banner_points') ) { 
                            the_row(); 
                            ?>
                            <li><?php the_sub_field('points'); ?></li>
                            <?php 
                        }
                    } 
                  ?>                   
               </ol>                       
            </div> 
            <div class="col-md-5 col-sm-6 mob-mt-74">
              <?php 
                  if( get_field('image_banner_layout_5') ) { 
                      ?>
                      <img src="<?php the_field('image_banner_layout_5'); ?>" class="img-responsive banner-pic" alt="">
                      <?php 
                  } 
              ?> 
          </div> 
      </div>    
  </div>              
</div>