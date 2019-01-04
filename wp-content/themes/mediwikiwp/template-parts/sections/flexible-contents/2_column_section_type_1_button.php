<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_section_type_1_button') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_1_button'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-6 padding-left-0 mt-20">
                <?php
                    if( have_rows('left_column_1_section_type_1_button') ) {
                        while ( have_rows('left_column_1_section_type_1_button') ) { 
                            the_row(); 
                            ?>
                            <div class="download-content">
                                <h4><?php the_sub_field('heading_2_column_section_type_1_button'); ?></h4> 
                                <p><?php the_sub_field('content_left_column_1_section_type_1_button'); ?></p>
                                <a href="<?php the_sub_field('button_link_left_column_1_section_type_1_button'); ?>"><?php the_sub_field('button_label_left_column_1_section_type_1_button'); ?></a> 
                            </div>
                            <?php 
                        }
                    } 
                ?>

                <?php 
                    if( get_sub_field('section_button_link') ) { 
                        ?>
                        <div class="box-link mt-20 mb-60">
                            <a href="<?php the_sub_field('section_button_link'); ?>"><?php the_sub_field('section_button_lable'); ?> <span class="fa fa-angle-right"></span></a>
                        </div> 
                        <?php 
                    }            
                ?>

            </div>
            <?php
                if( have_rows('right_column_2_section_type_1_button') ) {
                    while ( have_rows('right_column_2_section_type_1_button') ) { 
                        the_row(); 
                        ?>
                        <div class="col-md-6 box-background mt-20">
                            <h3 class="content-heading"><?php the_sub_field('heading_right_column_2_section_type_1_button'); ?></h3>
                            <ol type="1" class="box-background-list">
                                <?php
                                    if( have_rows('lists_right_column_2_section_type_1_button') ) {
                                        while ( have_rows('lists_right_column_2_section_type_1_button') ) { 
                                            the_row(); 
                                            ?>    
                                            <li><?php the_sub_field('list_right_column_2_section_type_1_button'); ?></li>
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