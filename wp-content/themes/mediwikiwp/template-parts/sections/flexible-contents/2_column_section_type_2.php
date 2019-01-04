<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_section_type_2') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_2'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-5 padding-left-0">
                <div class="page-content">
                    <?php 
                        if( get_sub_field('contents_1_2_column_section_type_2') ) { 
                            ?>
                            <?php the_sub_field('contents_1_2_column_section_type_2'); ?>   
                            <?php 
                        } 
                    ?>
                </div>   
            </div>
            <div class="col-md-5 col-md-offset-1 padding-left-0">
                <div class="page-content">
                    <?php 
                        if( get_sub_field('contents_2_2_column_section_type_2') ) { 
                            ?>
                            <?php the_sub_field('contents_2_2_column_section_type_2'); ?>   
                            <?php 
                        } 
                    ?>
                </div> 
            </div>          
        </section>
    </div>
</div>