<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_table_image_type_1') ) { 
                    ?>
                    <h3 class="content-heading mb-0"><?php the_sub_field('heading_table_image_type_1'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-12 padding-left-0 padding-right-0">
                <table class="table table-responsive mt-20 custom-table custom-verticle-middle">
                    <thead>
                      <tr>
                        <th class="col-md-3"><?php the_sub_field('column_1_heading_table_image_type_1'); ?></th>
                        <th class="col-md-9"><?php the_sub_field('column_2_heading_table_image_type_1'); ?></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            if( have_rows('table_row_table_image_type_1') ) {
                                while ( have_rows('table_row_table_image_type_1') ) { 
                                    the_row(); 
                                    ?>
                                    <tr>
                                        <td>
                                            <?php $image_table_image_type_1 = get_sub_field('image_table_image_type_1');
                                                if ($image_table_image_type_1!="") {
                                                    ?>
                                                    <img src="<?php the_sub_field('image_table_image_type_1'); ?>" alt="Kidney" class="img-responsive table-img"> <span class="img-name"><?php the_sub_field('heading_inside_table_table_image_type_1'); ?></span>
                                                    <?php 
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php the_sub_field('table_content_table_table_image_type_1'); ?>
                                        </td>       
                                    </tr>
                                    <?php 
                                }
                            } 
                        ?>              
                      
                    </tbody>
                </table> 

                <!-- Mobile View -->

                <table class="table table-responsive mt-40 custom-table custom-verticle-middle mobile-view">
                    <tbody>
                        <?php
                            if( have_rows('table_row_table_image_type_1') ) {
                                while ( have_rows('table_row_table_image_type_1') ) { 
                                    the_row(); 
                                    ?>
                                    <tr>                                        
                                        <td class="padding-left-0">
                                            <?php $image_table_image_type_1 = get_sub_field('image_table_image_type_1');
                                                if ($image_table_image_type_1!="") {
                                                    ?>
                                                    <img src="<?php the_sub_field('image_table_image_type_1'); ?>" alt="Kidney" class="img-responsive table-img"> <span class="img-name"><?php the_sub_field('heading_inside_table_table_image_type_1'); ?></span>
                                                    <?php 
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php the_sub_field('table_content_table_table_image_type_1'); ?>
                                        </td>       
                                    </tr>
                                    <?php 
                                }
                            } 
                        ?>   
                    </tbody>
                </table>                        
            </div>                
        </section>
    </div>
</div>
<div class="clearfix"></div>