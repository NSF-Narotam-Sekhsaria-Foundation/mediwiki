<div class="container mb-60">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_section_type_7') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_7'); ?></h3>
                    <?php 
                } 
            ?>
            <?php 
                if( get_sub_field('sub_heading_2_column_section_type_7') ) { 
                    ?>
                    <h3 class="sub-heading"><?php the_sub_field('sub_heading_2_column_section_type_7'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-6 padding-left-0">
                <ul class="circle-points">
                    <?php
                        if( have_rows('points_2_column_section_type_7') ) {
                            while ( have_rows('points_2_column_section_type_7') ) { 
                                the_row(); 
                                ?>
                                <li><?php the_sub_field('point_2_column_section_type_7'); ?></li>
                                <?php 
                            }
                        } 
                    ?>
                </ul>

                <?php 
                    if( get_sub_field('button_link_2_column_section_type_7') ) { 
                        ?>
                        <div class="box-link mt-20">
                            <a href="<?php the_sub_field('button_link_2_column_section_type_7'); ?>"><?php the_sub_field('button_label_2_column_section_type_7'); ?> <span class="fa fa-angle-right"></span></a>
                        </div>
                        <?php 
                    } 
                ?>

            </div>
            <div class="col-md-6 box-background mt-30">
                <h3 class="content-heading"><?php the_sub_field('heading_2_a__column_section_type_7'); ?></h3>
                <div class="box-address">
                    <?php the_sub_field('content_2_column_section_type_7'); ?>
                </div>                        
            </div>                        
        </section>
    </div>
</div>
