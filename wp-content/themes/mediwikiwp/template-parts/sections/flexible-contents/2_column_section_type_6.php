<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_column_section_type_6') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_column_section_type_6'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="contents">

                <?php
                    if( have_rows('column_2_column_section_type_6') ) {
                        while ( have_rows('column_2_column_section_type_6') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-6 padding-left-0">
                                <h3><?php the_sub_field('heading_2_column_type_6'); ?></h3>
                                <p><?php the_sub_field('content_2_column_type_6'); ?></p>
                            </div>
                            <?php 
                        }
                    } 
                ?>
                 
            </div>
        </section>
    </div>
</div>