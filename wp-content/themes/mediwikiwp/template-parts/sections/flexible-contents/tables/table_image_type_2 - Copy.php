<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <section class="content-section mobile-padding">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_table_image_type_2') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_table_image_type_2'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-12 padding-left-0 padding-right-0">
                <table class="table table-responsive mt-40 custom-table without-img">
                    <thead>
                      <tr>
                        <th class="col-md-3"><?php the_sub_field('column_1_heading_table_image_type_2'); ?></th>
                        <th class="col-md-9" style="padding-left: 0px !important;"><?php the_sub_field('column_2_heading_table_image_type_2'); ?></th>
                      </tr>
                    </thead>
                    <tbody>


                    <?php
                        if( have_rows('table_row_table_image_type_2') ) {
                            while ( have_rows('table_row_table_image_type_2') ) { 
                                the_row(); 
                                ?>
                                <tr>
                                    <?php
                                        if( have_rows('first_column_table_image_type_2') ) {
                                            while ( have_rows('first_column_table_image_type_2') ) { 
                                                the_row(); 
                                                ?>
                                                <td class="row padding-left-0">
                                                    <div class="col-sm-12 padding-left-0">
                                                        <img src="<?php the_sub_field('image_table_image_type_2'); ?>" alt="AUTOMOBILE" class="img-responsive table-img">
                                                        <p class="table-column-heading"><?php the_sub_field('heading_inside_table_table_image_type_2'); ?></p>
                                                    </div>
                                                </td> 
                                                <?php 
                                            }
                                        } 
                                    ?>
                                    <?php
                                        if( have_rows('second_column_table_image_type_2') ) {
                                            while ( have_rows('second_column_table_image_type_2') ) { 
                                                the_row(); 
                                                ?>
                                                <td>
                                                    <ul>
                                                        <?php
                                                            if( have_rows('table_order_list_table_image_type_2') ) {
                                                                while ( have_rows('table_order_list_table_image_type_2') ) { 
                                                                    the_row(); 
                                                                    ?>
                                                                    <li><?php the_sub_field('list_table_image_type_2'); ?></li>
                                                                    <?php 
                                                                }
                                                            } 
                                                        ?>
                                                    </ul>
                                                </td>
                                                <?php 
                                            }
                                        } 
                                    ?>
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

