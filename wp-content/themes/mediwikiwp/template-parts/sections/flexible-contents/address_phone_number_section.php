<div class="container">
    <div class="row">
        <section class="content-section">
            <?php 
                if( get_sub_field('heading_address_phone_number_section') ) { 
                    ?>
                    <h3 class="content-heading"><?php the_sub_field('heading_address_phone_number_section'); ?></h3>
                    <?php 
                } 
            ?>
            <?php 
                if( get_sub_field('content_address_phone_number_section') ) { 
                    ?>
                    <p class="sub-paragraph"><?php the_sub_field('content_address_phone_number_section'); ?></p>
                    <?php 
                } 
            ?>
            <div class="row">                
                <?php
                    if( have_rows('column_address_phone_number_section') ) {
                        while ( have_rows('column_address_phone_number_section') ) { 
                            the_row(); 
                            ?>
                            <div class="col-md-4 padding-left-0">
                                <h3 class="sub-heading"><?php the_sub_field('name_column_address_phone_number_section'); ?></h3>
                                <p class="sub-paragraph"><?php the_sub_field('address_column_address_phone_number_section'); ?></p>

                                <?php
                                    if( have_rows('phone_number_column_address_phone_number_section') ) {
                                        while ( have_rows('phone_number_column_address_phone_number_section') ) { 
                                            the_row(); 
                                            ?>
                                            <p class="sub-paragraph"><span class="fa fa-phone grey"></span><?php the_sub_field('phone_number'); ?></p>
                                            <?php
                                        }    
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
