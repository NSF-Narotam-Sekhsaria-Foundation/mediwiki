<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_content') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_content'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="contents">

                <?php
                    if( have_rows('columns') ) {
                        while ( have_rows('columns') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-6 padding-left-0">
                                <h3><?php the_sub_field('heading_column_2_column_content'); ?></h3>
                                <p><?php the_sub_field('content_column_2_column_content'); ?></p>
                                <a href="<?php the_sub_field('button_link_column_2_column_content'); ?>"><?php the_sub_field('button_label_column_2_column_content'); ?></a>
                            </div>
                            <?php 
                        }
                    } 
                ?>               
                
            </div>  
        </section>  
    </div>
</div>