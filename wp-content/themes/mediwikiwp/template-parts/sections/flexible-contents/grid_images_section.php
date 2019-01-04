<div class="container">
    <div class="row">
        <section class="grid-images mt-50">
            <div class="row">
                <?php
                    if( have_rows('images_grid_images_section') ) {
                        while ( have_rows('images_grid_images_section') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-4 grid_img">
                                <img src="<?php the_sub_field('image_grid_images'); ?>" alt="" class="img-responsive">
                            </div>
                            <?php
                        }    
                    } 
                ?>                
            </div>
        </section>
    </div>
</div>