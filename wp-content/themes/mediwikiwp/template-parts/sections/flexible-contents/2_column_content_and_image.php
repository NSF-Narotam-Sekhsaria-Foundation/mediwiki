<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_content_and_image') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_content_and_image'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="row">
                <div class="col-md-6 padding-left-0">
                <div class="download-content">
                    <?php 
                        if( get_sub_field('content_2_column_content_and_image') ) { 
                            ?>
                            <p class="line-height-30"><?php the_sub_field('content_2_column_content_and_image'); ?></p> 
                            <?php 
                        } 
                    ?>   
                </div>                     
                </div>   
                <div class="col-md-6">
                    <?php 
                        if( get_sub_field('image_2_column_content_and_image') ) { 
                            ?>
                            <img src="<?php the_sub_field('image_2_column_content_and_image'); ?>" class="img-responsive mt-50 width-538" alt="Brain Death">
                            <?php 
                        } 
                    ?>
                </div>
            </div>                                                
        </section>
    </div>
</div>