<section class="content-section">
    <?php 
        if( get_sub_field('section_heading_2_column_section_type_8') ) { 
            ?>
            <div class="container">    
                <div class="heading-top-line"></div>
                <h3 class="content-heading"><?php the_sub_field('section_heading_2_column_section_type_8'); ?></h3>
            </div>
            <?php 
        } 
    ?>
    <style>
        @media print {
            section.print_img {
                background: url(<?php the_sub_field('background_image_type_8'); ?>) !important; 
                background-repeat: no-repeat !important; 
                background-size: cover !important; 
                display: flex !important; 
                margin: 0 !important; 
                background-attachment: fixed !important; 
                -webkit-print-color-adjust: exact; 
                print-color-adjust: exact;           
            }
        }
    </style>
    <div class="container-fluid mb-60 padding-none">
        <div class="row">
            <section class="content-section print_img" style="background: url(<?php the_sub_field('background_image_type_8'); ?>); background-repeat: no-repeat; background-size: cover; display: flex; margin: 0; background-attachment: fixed;">
                <div class="col-md-6">                  
                </div>
                <div class="col-md-6 box-background-img mt-30">
                    <?php 
                        if( get_sub_field('box_heading_2_column_section_type_8') ) { 
                            ?>
                            <h3 class="content-heading"><?php the_sub_field('box_heading_2_column_section_type_8'); ?></h3>
                            <?php 
                        } 
                    ?>
                    <?php 
                        if( get_sub_field('content_2_column_section_type_8') ) { 
                            ?>
                            <div class="box-address">
                                <?php the_sub_field('content_2_column_section_type_8'); ?>
                            </div>   
                            <?php 
                        } 
                    ?>                     
                </div>                        
            </section>
        </div>
    </div>
</section>