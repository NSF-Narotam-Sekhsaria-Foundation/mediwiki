<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>                       
            <div class="col-md-8 padding-left-0 custom-width-713">
                <div class="contents">
                    <?php 
                        if( get_sub_field('heading_full_width_content_button') ) { 
                            ?>
                            <h3 class="content-heading"><?php the_sub_field('heading_full_width_content_button'); ?></h3>
                            <?php 
                        } 
                    ?>
                    <?php 
                        if( get_sub_field('content_full_width_content_button') ) { 
                            ?>
                            <?php the_sub_field('content_full_width_content_button'); ?>   
                            <?php 
                        } 
                    ?>
                </div> 
            </div>
            <div class="col-md-4">
                
            </div>

            <div class="clearfix"></div>

            <?php 
                if( get_sub_field('button_link_full_width_content_button') ) { 
                    ?>
                    <div class="box-link mt-20">
                        <a href="<?php the_sub_field('button_link_full_width_content_button'); ?>"><?php the_sub_field('button_label_full_width_content_button'); ?> <span class="fa fa-angle-right"></span></a>
                    </div>
                    <?php 
                } 
            ?>
        </section>
    </div>
</div>