<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <section class="content-section">
            <div class="heading-top-line"></div>
            <?php 
                if( get_sub_field('heading_2_table_in_1_row') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_2_table_in_1_row'); ?></h3>
                    <?php 
                } 
            ?>
            
            <div class="row">
                <?php
                    if( have_rows('block_content') ) {
                        while ( have_rows('block_content') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-3 block-content <?php if ( get_sub_field('background_color') ){ echo 'back-color'; } ?>">
                                <?php 
                                    $heading_block_content = get_sub_field('heading_block_content'); 
                                    if ($heading_block_content!="") { 
                                        ?>
                                        <h3 class="block-heading"><?php echo $heading_block_content; ?></h3>
                                        <?php 
                                        the_sub_field('content_block_content');
                                    }
                                ?>
                            </div>
                            <?php 
                        }
                    } 
                ?>                
            </div>
        </section>
    </div>
</div>
<div class="clearfix"></div>
