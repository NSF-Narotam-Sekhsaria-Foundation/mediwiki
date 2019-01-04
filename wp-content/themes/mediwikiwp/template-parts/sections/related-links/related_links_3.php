<section class="top-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 top-footer-background releted_links_3">                        
                <?php if( get_field('heading_related_links_layout_3') ) { ?>
                    <p><?php the_field('heading_related_links_layout_3'); ?></p>
                <?php } ?>
                <?php
                    // check if the repeater field has rows of data
                    if( have_rows('related_links_layout_3') ) {
                        while ( have_rows('related_links_layout_3') ) { 
                            the_row();
                            $title_related_links_layout_3 = get_sub_field('title_related_links_layout_3');
                            $links_related_links_layout_3 = get_sub_field('links_related_links_layout_3');
                            ?>    
                            <a href="<?php echo $links_related_links_layout_3; ?>" class="theme-color-content"><?php echo $title_related_links_layout_3; ?></a>
                            <div class="clearfix"></div>
                            <?php   
                        } 
                    }
                ?>
            </div>
        </div>
    </div>            
</section>

