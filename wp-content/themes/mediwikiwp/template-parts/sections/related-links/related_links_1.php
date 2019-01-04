<section class="top-footer">
    <div class="container">
        <div class="row  top-footer-background two-col-footer-upper-section">
            <?php if( get_field('heading_related_links_layout_1') ) { ?>
                    <p><?php the_field('heading_related_links_layout_1'); ?></p>
            <?php } ?>
            <div class="col-md-6 padding-left-0">
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('related_links_layout_1') ) {
                        while ( have_rows('related_links_layout_1') ) { 
                            the_row();
                            $title_related_links_layout_1 = get_sub_field('title_related_links_layout_1');
                            $links_related_links_layout_1 = get_sub_field('links_related_links_layout_1');
                            ?>      
                            <a href="<?php echo $links_related_links_layout_1; ?>" class="theme-color-content"><?php echo $title_related_links_layout_1 ?></a>
                            <div class="clearfix"></div>
                            <?php   
                        } 
                    }
                ?>                       
            </div>

            <div class="col-md-6 padding-left-0 mobile-top-space">
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('related_links_layout_1_col_2') ):
                        while ( have_rows('related_links_layout_1_col_2') ) : the_row();
                        
                            $title_related_links_layout_1_col_2 = get_sub_field('title_related_links_layout_1_col_2');
                            $links_related_links_layout_1_col_2 = get_sub_field('links_related_links_layout_1_col_2');
                ?>      
                            <a href="<?php echo $links_related_links_layout_1_col_2; ?>" class="theme-color-content"><?php echo $title_related_links_layout_1_col_2 ?></a>
                            <div class="clearfix"></div>

                <?php   endwhile; 
                    endif;
                ?>                       
            </div>
        </div>
    </div>            
</section>