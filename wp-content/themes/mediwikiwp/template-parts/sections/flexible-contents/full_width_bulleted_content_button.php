<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_full_width_bulleted_content_button') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_full_width_bulleted_content_button'); ?></h3>
                    <?php 
                } 
            ?>
            <?php 
                if( get_sub_field('content') ) { 
                    ?>
                    <p class="theme-paragraph"><?php the_sub_field('content'); ?></p>
                    <?php 
                } 
            ?>   
            <ul class="circle-points">
                <?php
                    if( have_rows('points_full_width_bulleted_content_button') ) {
                        while ( have_rows('points_full_width_bulleted_content_button') ) { 
                            the_row(); 
                            ?>
                            <li><?php the_sub_field('point'); ?></li>                    
                            <?php 
                        }
                    } 
                ?>
            </ul>
            <?php 
                if( get_sub_field('button_link_full_width_bulleted_content_button') ) { 
                    ?>        
                    <div class="box-link mt-20">
                        <a href="<?php the_sub_field('button_link_full_width_bulleted_content_button'); ?>"><?php the_sub_field('button_label_full_width_bulleted_content_button'); ?> <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                    <?php 
                } 
            ?>

        </section>
    </div>
</div>