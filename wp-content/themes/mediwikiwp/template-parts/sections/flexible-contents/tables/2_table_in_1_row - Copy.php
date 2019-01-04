<div class="clearfix"></div>
<div class="container">
    <div class="row">
      <section class="content-section">
          <div class="heading-top-line"></div>
          <?php 
              if( get_sub_field('heading_2_table_in_1_row') ) { 
                  ?>
                  <h3 class="content-heading"><?php the_sub_field('heading_2_table_in_1_row'); ?></h3>
                  <?php 
              } 
          ?>
            
          <div class="row">
              <div class="col-md-6 padding-left-0">
                  <table class="table table-responsive double-table">
                      <thead>
                        <tr>
                          <?php
                            if( have_rows('table_column_heading_table_type_2_table') ) {
                                while ( have_rows('table_column_heading_table_type_2_table') ) { 
                                    the_row(); 
                                    ?>
                                    <th class="<?php if ( get_sub_field('add_color') ){ echo 'back-color'; } ?>"><?php the_sub_field('heading_column_table_type_2_table'); ?></th>
                                    <?php 
                                }
                            } 
                          ?>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                            if( have_rows('first_column_2_table_in_1_row') ) {
                                while ( have_rows('first_column_2_table_in_1_row') ) { 
                                    the_row(); 
                                    ?>
                                    <tr>
                                      <td><?php the_sub_field('heading_points'); ?></td>
                                      <td class="<?php if ( get_sub_field('add_color_2_table_in_1_row') ){ echo 'back-color'; } ?>" style="<?php if ( get_sub_field('add_custom_height') ){ echo 'height: 60px;'; } ?>"><?php the_sub_field('color_heading_points_2_table_in_1_row'); ?></td>
                                    </tr>
                                    <?php 
                                }
                            } 
                        ?>
                        
                      </tbody>
                    </table>
              </div>
              <div class="col-md-6 padding-left-0">
                  <table class="table table-responsive double-table">
                      <thead>
                        <tr>
                          <?php
                            if( have_rows('table_column_heading_table_type_2_table') ) {
                                while ( have_rows('table_column_heading_table_type_2_table') ) { 
                                    the_row(); 
                                    ?>
                                    <th class="<?php if ( get_sub_field('add_color') ){ echo 'back-color'; } ?>"><?php the_sub_field('heading_column_table_type_2_table'); ?></th>
                                    <?php 
                                }
                            } 
                          ?>
                        </tr>
                      </thead>
                      <tbody>

                        <?php
                            if( have_rows('second_column_2_table_in_1_row') ) {
                                while ( have_rows('second_column_2_table_in_1_row') ) { 
                                    the_row(); 
                                    ?>
                                    <tr>
                                      <td><?php the_sub_field('heading_points'); ?></td>
                                      <td class="<?php if ( get_sub_field('add_color_2_table_in_1_row') ){ echo 'back-color'; } ?>" style="<?php if ( get_sub_field('add_height') ){ echo 'height: 60px;'; } ?>"><?php the_sub_field('color_heading_points_2_table_in_1_row'); ?></td>
                                    </tr>
                                    <?php 
                                }
                            } 
                        ?>
                        
                      </tbody>
                    </table>
              </div>
          </div>
      </section>
    </div>
</div>
<div class="clearfix"></div>
