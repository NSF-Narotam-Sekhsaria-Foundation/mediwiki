<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_section_type_4') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_4'); ?></h3>
                    <?php 
                } 
            ?>            
            <?php
                if( have_rows('contents_per_paragraph') ) {
                    while ( have_rows('contents_per_paragraph') ) { 
                        the_row(); 
                        ?>
                        <div class="row item_rows">
                            <div class="col-md-6 padding-left-0 mob-mt-50-to-20 spacing"> 
                                <p class="theme-paragraph"><?php the_sub_field('content'); ?></p>
                            </div>
                            <div class="col-md-6">
                                <div class="img-steps mt-55">
                                    <img src="<?php the_sub_field('image'); ?>" class="img-responsive" alt="Step 1">
                                </div>
                            </div>
                        </div>
                        <?php 
                    }
                } 
            ?>              
        </section>
    </div>
</div>