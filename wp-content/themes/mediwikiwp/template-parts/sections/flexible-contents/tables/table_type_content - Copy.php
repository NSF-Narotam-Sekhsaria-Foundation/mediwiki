<div class="clearfix"></div> 

<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('table_heading_table_type_content') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('table_heading_table_type_content'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-12 padding-left-0">
                <table class="table table-responsive mt-40 custom-table">
                    <thead>
                        <tr>             
                            <th class="col-md-3"><?php the_sub_field('table_column_heading_1'); ?></th>
                            <th class="col-md-9"><?php the_sub_field('table_column_heading_2'); ?></th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if( have_rows('columns') ) {
                                while ( have_rows('columns') ) { 
                                    the_row(); 
                                    ?>
                                    <tr>
                                        <?php
                                            if( have_rows('first_column') ) {
                                                while ( have_rows('first_column') ) { 
                                                    the_row(); 
                                                    ?>
                                                    <td>
                                                        <div class="heading-inside-table"><?php the_sub_field('heading_inside_table'); ?></div>
                                                        <div class="content-inside-table">
                                                            <?php the_sub_field('contents_inside_table'); ?>
                                                        </div>
                                                    </td>
                                                    <?php 
                                                }
                                            } 
                                        ?>
                                        <?php
                                            if( have_rows('second_column') ) {
                                                while ( have_rows('second_column') ) { 
                                                    the_row(); 
                                                    ?>
                                                    <td>
                                                        <div class="content-inside-table">
                                                            <?php the_sub_field('contents_inside_table'); ?>
                                                            <ol type="1">
                                                                <?php
                                                                    if( have_rows('table_order_list') ) {
                                                                        while ( have_rows('table_order_list') ) { 
                                                                            the_row(); 
                                                                            ?>
                                                                            <li><?php the_sub_field('list'); ?></li>
                                                                            <?php 
                                                                        }
                                                                    } 
                                                                ?>
                                                            </ol>
                                                        </div>
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
    