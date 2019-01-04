<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="col-md-6 padding-left-0">
                <?php
                if( get_sub_field('heading_3_column_section_type_3') ) {
                    ?>
                    <div class="heading-top-line"></div>
                    <h3 class="content-heading"><?php the_sub_field('heading_3_column_section_type_3'); ?></h3>
                    <?php
                }
                ?>
                <ul class="circle-points">
                    <?php
                        if( have_rows('lists_of_bulleted_list_section_type_3') ) {
                            while ( have_rows('lists_of_bulleted_list_section_type_3') ) { 
                                the_row(); 
                                ?>
                                <li><?php the_sub_field('list'); ?></li>
                                <?php 
                            }
                        } 
                    ?>  
                </ul>
                <?php 
                    if( get_sub_field('button_links') ) { 
                        ?>
                        <div class="box-link mt-50">
                            <a href="<?php the_sub_field('button_links'); ?>"><?php the_sub_field('button_label'); ?> <span class="fa fa-angle-right"></span></a>
                        </div>
                        <?php 
                    } 
                ?>             
            </div>
            <div class="col-md-6 box-background pt-zero">
                <?php 
                    if( get_sub_field('color_background_heading') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('color_background_heading'); ?></h3>
                        <?php 
                    } 
                ?>
                    <ol type="1" class="box-background-list">
                        <?php
                            if( have_rows('color_background_lists_of_bulleted_list_section_type_3') ) {
                                while ( have_rows('color_background_lists_of_bulleted_list_section_type_3') ) { 
                                    the_row(); 
                                    ?>
                                    <li><?php the_sub_field('color_background_list'); ?></li>
                                    <?php 
                                }
                            } 
                        ?>
                    </ol>
            </div>                        
        </section>
    </div>
</div>