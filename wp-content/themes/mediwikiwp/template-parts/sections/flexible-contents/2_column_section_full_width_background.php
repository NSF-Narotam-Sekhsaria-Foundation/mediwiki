<section class="content-section light-grey">
    <div class="container custom-border-left">
        <div class="row">
            <div class="col-md-6">
                <?php 
                    if( get_sub_field('heading_2_column_section_full_width_background_column_1') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_full_width_background_column_1'); ?></h3>
                        <?php 
                    } 
                ?>
                <?php 
                    if( get_sub_field('contents_2_column_section_full_width_background_column_1') ) { 
                        ?>
                        <div class="page-content">
                            <?php the_sub_field('contents_2_column_section_full_width_background_column_1'); ?>
                        </div> 
                        <?php 
                    } 
                ?>  
                <div class="clearfix"></div>                     
            </div>
            <div class="col-md-6">
                <?php 
                    if( get_sub_field('heading_2_column_section_full_width_background_column_2') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_full_width_background_column_2'); ?></h3>
                        <?php 
                    } 
                ?>
                <?php 
                    if( get_sub_field('contents_2_column_section_full_width_background_column_2') ) { 
                        ?>
                        <div class="page-content">
                            <?php the_sub_field('contents_2_column_section_full_width_background_column_2'); ?>
                        </div>
                        <?php 
                    } 
                ?>
                <div class="clearfix"></div>  
            </div>
        </div>
    </div>                         
</section>
    