<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_table_image_type_1') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_table_image_type_1'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-12 padding-left-0 padding-right-0">
                <table class="table table-responsive mt-40 custom-table custom-verticle-middle">
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
                                        <?php
                                            if( have_rows('first_column_table_image_type_1') ) {
                                                while ( have_rows('first_column_table_image_type_1') ) { 
                                                    the_row(); 
                                                    ?>
                                                    <td>
                                                        <img src="<?php the_sub_field('image_table_image_type_1'); ?>" alt="Kidney" class="img-responsive table-img"> <span class="img-name"><?php the_sub_field('heading_inside_table_table_image_type_1'); ?></span>
                                                    </td>
                                                    <?php 
                                                }
                                            } 
                                        ?>
                                        <?php
                                            if( have_rows('second_column_table_image_type_1') ) {
                                                while ( have_rows('second_column_table_image_type_1') ) { 
                                                    the_row(); 
                                                    ?>
                                                    <td>
                                                        <ul>
                                                            <?php
                                                                if( have_rows('table_order_list_table_image_type_1') ) {
                                                                    while ( have_rows('table_order_list_table_image_type_1') ) { 
                                                                        the_row(); 
                                                                        ?>
                                                                        <li>- <?php the_sub_field('list_table_image_type_1'); ?> </li>
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

                <!-- Mobile View -->

                <table class="table table-responsive mt-40 custom-table custom-verticle-middle mobile-view">
                    <thead class="mobile-none-mobile-view">
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
                                        <?php
                                            if( have_rows('first_column_table_image_type_1') ) {
                                                while ( have_rows('first_column_table_image_type_1') ) { 
                                                    the_row(); 
                                                    ?>
                                                    <td class="padding-left-0">
                                                        <img src="<?php the_sub_field('image_table_image_type_1'); ?>" alt="Kidney" class="img-responsive table-img"> <span class="img-name"><?php the_sub_field('heading_inside_table_table_image_type_1'); ?></span>
                                                    </td>
                                                    <?php 
                                                }
                                            } 
                                        ?>
                                        <?php
                                            if( have_rows('second_column_table_image_type_1') ) {
                                                while ( have_rows('second_column_table_image_type_1') ) { 
                                                    the_row(); 
                                                    ?>
                                                    <td>
                                                        <ol type="1" class="movile-view-ol">
                                                            <?php
                                                                if( have_rows('table_order_list_table_image_type_1') ) {
                                                                    while ( have_rows('table_order_list_table_image_type_1') ) { 
                                                                        the_row(); 
                                                                        ?>
                                                                        <li> <?php the_sub_field('list_table_image_type_1'); ?> </li>
                                                                        <?php 
                                                                    }
                                                                } 
                                                            ?>
                                                        </ol>
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