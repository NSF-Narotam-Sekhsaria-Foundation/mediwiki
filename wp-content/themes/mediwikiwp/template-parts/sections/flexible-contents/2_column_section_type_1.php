<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_section_type_1') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_1'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-6 padding-left-0">
                <?php
                    if( have_rows('left_column_1_section_type_1') ) {
                        while ( have_rows('left_column_1_section_type_1') ) { 
                            the_row(); 
                            ?>
                            <div class="download-content">
                                <h4><?php the_sub_field('heading_left_column_1_section_type_1'); ?></h4> 
                                <p><?php the_sub_field('content_left_column_1_section_type_1'); ?></p>
                                <a href="<?php the_sub_field('button_link_left_column_1_section_type_1'); ?>"><?php the_sub_field('button_label_left_column_1_section_type_1'); ?></a> 
                            </div>
                            <?php 
                        }
                    } 
                ?>
            </div>
            <?php
                if( have_rows('right_column_2_section_type_1') ) {
                    while ( have_rows('right_column_2_section_type_1') ) { 
                        the_row(); 
                        ?>
                        <div class="col-md-6 box-background">
                            <h3 class="content-heading"><?php the_sub_field('heading_right_column_2_section_type_1'); ?></h3>
                        
                            <?php 
                                if( get_sub_field('content_right_column_2_section_type_1') ) { 
                                    ?>
                                    <div class="box-address">
                                        <?php the_sub_field('content_right_column_2_section_type_1'); ?>
                                    </div>
                                    <?php 
                                } 
                            ?>


                            <ol type="1" class="box-background-list">
                                <?php
                                    if( have_rows('lists_right_column_2_section_type_1') ) {
                                        while ( have_rows('lists_right_column_2_section_type_1') ) { 
                                            the_row(); 
                                            ?>    
                                            <li><?php the_sub_field('list_right_column_2_section_type_1'); ?></li>
                                            <?php 
                                        }
                                    } 
                                ?>                   
                            </ol>
                        </div>  
                        <?php 
                    }
                } 
            ?>                      
        </section>
    </div>
</div>
