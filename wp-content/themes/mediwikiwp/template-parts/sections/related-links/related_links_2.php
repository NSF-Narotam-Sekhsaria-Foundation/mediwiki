<section class="top-footer">
    <div class="container">
        <div class="row  top-footer-background two-col-footer-upper-section">
            
            <div class="col-md-6 underline-none">
                <?php if( get_field('heading_related_links_layout_2') ) { ?>
                    <p><?php the_field('heading_related_links_layout_2'); ?></p>
                <?php } ?>  
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('related_links_layout_2') ) {
                        while ( have_rows('related_links_layout_2') ) { 
                            the_row();
                            $title_related_links_layout_2 = get_sub_field('title_related_links_layout_2');
                            $links_related_links_layout_2 = get_sub_field('links_related_links_layout_2');
                            ?>  
                            <a href="<?php echo $links_related_links_layout_2; ?>" class="theme-color-content"><?php echo $title_related_links_layout_2; ?></a>
                            <div class="clearfix"></div>
                            <?php   
                        } 
                    }
                ?>
                
            </div>

            <div class="col-md-6 underline-none mobile-top-space">   
                <?php if( get_field('heading_related_links_layout_2_col_2') ) { ?>
                    <p><?php the_field('heading_related_links_layout_2_col_2'); ?></p>
                <?php } ?>
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('related_links_layout_2_col_2') ) {
                        while ( have_rows('related_links_layout_2_col_2') ) { 
                            the_row();
                            $title_related_links_layout_2_col_2 = get_sub_field('title_related_links_layout_2_col_2');
                            $links_related_links_layout_2_col_2 = get_sub_field('links_related_links_layout_2_col_2');
                            ?>                  
                            <a href="<?php echo $links_related_links_layout_2_col_2; ?>" class="theme-color-content"><?php echo $title_related_links_layout_2_col_2; ?></a>
                            <div class="clearfix"></div>
                            <?php   
                        } 
                    }
                ?>
            </div>
        </div>
    </div>            
</section>