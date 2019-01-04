<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 no-padding">
                <div class="heading-top-line"></div>
                <?php 
                    if( get_sub_field('heading_2_column_section_right_column_background_column_1') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_right_column_background_column_1'); ?></h3>
                        <?php 
                    } 
                ?>
                <div class="page-content">
                    <?php 
                        if( get_sub_field('contents_2_column_section_right_column_background_column_1') ) { 
                            ?>
                            <div class="page-content">
                                <?php the_sub_field('contents_2_column_section_right_column_background_column_1'); ?>
                            </div> 
                            <?php 
                        } 
                    ?> 
                </div>   
            </div>
            <div class="col-md-6 custom-border-left light-grey padding-position">
                <?php 
                    if( get_sub_field('heading_2_column_section_right_column_background_column_2') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_right_column_background_column_2'); ?></h3>
                        <?php 
                    } 
                ?>
                <div class="page-content">
                    <?php 
                        if( get_sub_field('contents_2_column_section_right_column_background_column_2') ) { 
                            ?>
                            <div class="page-content">
                                <?php the_sub_field('contents_2_column_section_right_column_background_column_2'); ?>
                            </div>
                            <?php 
                        } 
                    ?>
                </div>                           
                <div class="clearfix"></div>                     
            </div>
        </div>
    </div>                         
</section>