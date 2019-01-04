<div class="container">
    <div class="row">
        <div class="container padding-left-0 padding-right-0 mobile_padding">
            <section class="content-section">
                <div class="heading-top-line"></div>
                <?php 
                    if( get_sub_field('heading_single_column_section') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_single_column_section'); ?></h3>
                        <?php 
                    } 
                ?>
                <?php 
                    if( get_sub_field('content_single_column_section') ) { 
                        ?>
                        <p class="theme-paragraph"><?php the_sub_field('content_single_column_section'); ?></p>
                        <?php 
                    } 
                ?>
                <ul class="circle-points">
                    <?php
                        if( have_rows('points_single_column_section') ) {
                            while ( have_rows('points_single_column_section') ) { 
                                the_row(); 
                                ?>
                                <li><?php the_sub_field('point_single_column_section'); ?></li>
                                <?php 
                            }
                        } 
                    ?>
                </ul>                
            </section>
        </div>
    </div>
</div>
