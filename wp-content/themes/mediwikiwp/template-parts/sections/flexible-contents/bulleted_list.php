<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_bulleted_list') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_bulleted_list'); ?></h3>
                    <?php 
                } 
            ?>
            <ul class="circle-points">
                <?php
                    if( have_rows('lists_of_bulleted_list') ) {
                        while ( have_rows('lists_of_bulleted_list') ) { 
                            the_row(); 
                            ?>
                            <li><?php the_sub_field('list'); ?></li>
                            <?php 
                        }
                    } 
                ?>                                   
            </ul>          
        </section>
    </div>
</div>