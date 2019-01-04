<div class="container">
    <div class="row">
        <section class="grid-images mt-50">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_4_column_section') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_4_column_section'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="row">
                <?php
                    if( have_rows('images_grid_images_4_column_section') ) {
                        while ( have_rows('images_grid_images_4_column_section') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-3">
                                <img src="<?php the_sub_field('image_grid_images_4_column'); ?>" alt="" class="img-responsive m5">
                            </div>
                            <?php
                        }    
                    } 
                ?>                
            </div>
        </section>
    </div>
</div>