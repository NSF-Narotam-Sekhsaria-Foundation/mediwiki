<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2-column-content-img') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2-column-content-img'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-6 no-padding">
                <div class="page-content">
                    <?php
                        if( have_rows('contents_2-column-content-img') ) {
                            while ( have_rows('contents_2-column-content-img') ) { 
                                the_row(); 
                                ?>
                                <p class="<?php if( get_sub_field('content_bold') ) { echo 'semi-bold'; } ?>">
                                    <?php the_sub_field('content'); ?> 
                                </p>
                                <?php 
                            }
                        } 
                    ?>
                </div>   
            </div>
            <div class="col-md-6">
                <?php 
                    if( get_sub_field('image_2-column-content-img') ) { 
                        ?>
                        <img src="<?php the_sub_field('image_2-column-content-img'); ?>" class="img-responsive content-img" alt="">
                        <?php 
                    }                  
                ?>
            </div>          
        </section>
    </div>
</div>