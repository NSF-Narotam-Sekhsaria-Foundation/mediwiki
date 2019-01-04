<div class="clearfix"></div>
<div class="container mt-50">
    <div class="row">
        <div class="container padding-left-0 padding-right-0">
            <section>
                <div class="heading-top-line"></div>
                <?php 
                    if( get_sub_field('section_heading_dos_and_donts_2_column_section') ) { 
                        ?>
                        <h3 class="content-heading"><?php the_sub_field('section_heading_dos_and_donts_2_column_section'); ?></h3>
                        <?php 
                    } 
                ?>
                <?php 
                    if( get_sub_field('section_content_dos_and_donts_2_column_section') ) { 
                        ?>
                        <h4 class="font-size-16"><?php the_sub_field('section_content_dos_and_donts_2_column_section'); ?></h4>
                        <?php 
                    } 
                ?>
                <div class="col-md-6 padding-left-0 padding-right-0">
                    <ul class="can-donate">
                        <?php
                            if( have_rows('dos_icon_list') ) {
                                while ( have_rows('dos_icon_list') ) { 
                                    the_row(); 
                                    ?>
                                    <li><?php the_sub_field('icon_list_dos_and_donts_2_column_section'); ?></li>
                                    <?php 
                                }
                            } 
                        ?>
                    </ul>
                    <ul class="dotless-points">
                        <?php
                            if( have_rows('dos_list') ) {
                                while ( have_rows('dos_list') ) { 
                                    the_row(); 
                                    ?>
                                     <li><?php the_sub_field('list_dotless_points'); ?></li>
                                     <?php 
                                }
                            } 
                        ?>
                    </ul>          
                </div>
                <div class="col-md-6 padding-left-0 padding-right-0">
                    <ul class="cannot-donate">
                        <?php
                            if( have_rows('dont_icon_list') ) {
                                while ( have_rows('dont_icon_list') ) { 
                                    the_row(); 
                                    ?>
                                    <li><?php the_sub_field('icon_list_dont_and_donts_2_column_section'); ?></li>
                                    <?php 
                                }
                            } 
                        ?>
                    </ul>

                    <?php
                        if( have_rows('dont_icon_list_rows') ) {
                            while ( have_rows('dont_icon_list_rows') ) { 
                                the_row(); 
                                ?>
                                <ul class="dotless-points">
                                    <?php
                                        if( have_rows('dont_list') ) {
                                            while ( have_rows('dont_list') ) { 
                                                the_row(); 
                                                ?>
                                                <li><?php the_sub_field('dont_list_dotless_points'); ?></li>
                                                <?php 
                                            }
                                        } 
                                    ?>
                                </ul>
                                <?php 
                            }
                        } 
                    ?>
                </div>                       
            </section>
        </div>
    </div>
</div>