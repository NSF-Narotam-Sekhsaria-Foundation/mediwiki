<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_full_width_content') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_full_width_content'); ?></h3>
                    <?php 
                } 
            ?>
            <div class="col-md-12 padding-left-0">
                <div class="contents">
                    <?php 
                        if( get_sub_field('content_full_width_content') ) { 
                            ?>
                            <?php the_sub_field('content_full_width_content'); ?>
                            <?php 
                        } 
                    ?>  
                </div> 
            </div>
            
        </section>
    </div>
</div>