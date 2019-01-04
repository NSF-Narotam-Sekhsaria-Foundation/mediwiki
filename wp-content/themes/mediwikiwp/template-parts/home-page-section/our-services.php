<div class="clearfix"></div>
<section class="our_services">
    <div class="line"></div>
    <?php 
        $section_heading = get_field( "section_heading" );
        if ($section_heading!="") {
            ?>    
            <h1 class="text-center heading"><?php echo $section_heading; ?></h1>
            <?php
        }
    ?>
    <div class="container-fluid service-area">
        <div class="container">
            <div class="row masonry-container">
                <div class="col-md-4 col-sm-6 masonry-sizer"></div>


            <?php

                // check if the repeater field has rows of data
                if( have_rows('home_services') ):

                    // loop through the rows of data
                    while ( have_rows('home_services') ) : the_row(); 

            ?>

                <div class="col-md-4 col-sm-6 masonry-item">
                    <div class="service-box">
                        <img src="<?php the_sub_field('service_image'); ?>" alt="" class="img-responsive">
                        <div class="service-content">
                            <h3><?php the_sub_field('heading'); ?></h3>
                            <ul class="subpage_links">

                            <?php

                                // check if the repeater field has rows of data
                                if( have_rows('links') ):

                                    // loop through the rows of data
                                    while ( have_rows('links') ) : the_row(); 

                            ?>
                                <li><a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('service_name'); ?></a></li>
                            
                            <?php  
                                    endwhile;
                                endif;
                            ?>

                            </ul>
                        </div>
                    </div>
                </div>

            <?php  
                    endwhile;
                endif;
            ?>

            </div>
        </div>
    </div>
</section>