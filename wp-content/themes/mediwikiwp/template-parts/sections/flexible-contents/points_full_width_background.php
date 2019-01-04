<section class="light-grey">
    <div class="container custom-border-left">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    if( get_sub_field('heading_points_full_width_background') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('heading_points_full_width_background'); ?></h3>
                        <?php 
                    } 
                ?>
                <div class="page-content">
                    <ol type="1" class="box-background-list">
                        <?php
                            if( have_rows('points_points_full_width') ) {
                                while ( have_rows('points_points_full_width') ) { 
                                    the_row(); 
                                    ?>
                                    <li><?php the_sub_field('point_full_width_back'); ?></li>
                                    <?php 
                                }
                            } 
                        ?>
                    </ol>
                </div>                        
            </div>
        </div>
    </div>                         
</section>