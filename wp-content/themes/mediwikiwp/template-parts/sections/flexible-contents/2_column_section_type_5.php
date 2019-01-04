<div class="container">
    <div class="row">
        <section class="content-section">                    
            <div class="row">
                <div class="heading-top-line"></div> 
                <?php 
                    if( get_sub_field('heading_2_column_section_type_4') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_4'); ?></h3>
                        <?php 
                    } 
                ?>

                <?php
                    if( have_rows('column_2_column_section_type_5') ) {
                        while ( have_rows('column_2_column_section_type_5') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-6 padding-left-0">

                                <?php
                                    if( have_rows('content_column_2_column_section_type_5') ) {
                                        while ( have_rows('content_column_2_column_section_type_5') ) { 
                                            the_row(); 
                                            ?>
                                            <div class="download-content">
                                                <div class="contents">
                                                    <h3><?php the_sub_field('heading_content_column_2_column_section_type_5'); ?></h3>
                                                </div>
                                                <ul class="circle-points">
                                                    <?php
                                                        if( have_rows('points_content_column_2_column_section_type_5') ) {
                                                            while ( have_rows('points_content_column_2_column_section_type_5') ) { 
                                                                the_row(); 
                                                                ?>
                                                                <li><?php the_sub_field('point_content_column_2_column_section_type_5'); ?></li>
                                                                <?php 
                                                            }
                                                        } 
                                                    ?>
                                                </ul>   
                                            </div>
                                            <?php 
                                        }
                                    } 
                                ?>
                                
                                <?php
                                    if( have_rows('button_content_column_2_column_section_type_5') ) {
                                        while ( have_rows('button_content_column_2_column_section_type_5') ) { 
                                            the_row(); 
                                            ?>
                                            <div class="box-link mt-20">
                                                <a href="<?php the_sub_field('button_link_content_column_2_column_section_type_5'); ?>"><?php the_sub_field('button_label_content_column_2_column_section_type_5'); ?> <span class="fa fa-angle-right"></span></a>
                                            </div>
                                            <?php 
                                        }
                                    } 
                                ?>
                            </div>
                            <?php 
                        }
                    } 
                ?>
            </div>                                     
        </section>
    </div>
</div>