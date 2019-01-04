<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mediwikiwp
 */
?>  

    <?php if ( get_field('related_links') && get_field( 'related_links_layout' ) == 'related_links_1' ) { ?>
            <?php get_template_part( 'template-parts/sections/related-links/related_links_1' ); ?>
    <?php } ?>

    <?php if ( get_field('related_links') && get_field( 'related_links_layout' ) == 'related_links_2' ) { ?>
            <?php get_template_part( 'template-parts/sections/related-links/related_links_2' ); ?>
    <?php } ?>

    <?php if ( get_field('related_links') && get_field( 'related_links_layout' ) == 'related_links_3' ) { ?>
            <?php get_template_part( 'template-parts/sections/related-links/related_links_3' ); ?>
    <?php } ?>

    <?php
        $footer_class = ''; 
        if ( get_field('related_links') ) { 
            $footer_class = 'pt-92'; 
        } else {
            if ( !is_front_page() || !is_archive() ) {
                $footer_class = 'mt-50';
            }
            if ( is_archive() ) {
                $footer_class = '';
            }
            if ( is_front_page() ) {
                $footer_class = '';
            }
        }
    ?>

    <footer class="<?php echo $footer_class; ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php $footer_contact_us_heading = get_field('footer_contact_us_heading', 'option'); ?>
                    <?php if ($footer_contact_us_heading!=""): ?>
                        <h2><?php echo $footer_contact_us_heading; ?></h2>
                    <?php endif ?>

                    <?php $footer_contact_us_address = get_field('footer_contact_us_address', 'option'); ?>
                    <p><?php echo $footer_contact_us_address ?>
                    
                    <?php $footer_contact_us_email = get_field('footer_contact_us_email', 'option'); ?>
                    <?php if ($footer_contact_us_email!=""): ?>
                        Email us: <a href="mailto:<?php echo $footer_contact_us_email ?>"><?php echo $footer_contact_us_email ?></a>  |  
                    <?php endif ?>

                    <?php $footer_contact_us_whatsapp = get_field('footer_contact_us_whatsapp', 'option'); ?>
                    <?php if ($footer_contact_us_whatsapp!=""): ?>
                    WhatsApp: <a target="_blank" href="https://wa.me/<?php echo $footer_contact_us_whatsapp; ?>">+<?php echo $footer_contact_us_whatsapp; ?></a>
                    <?php endif ?>
                    </p>
                </div>
                <div class="col-md-4">
                    <?php $social_links_heading = get_field('social_links_heading', 'option'); ?>
                    <?php if ($social_links_heading!=""): ?>
                        <h2><?php echo $social_links_heading; ?></h2>
                    <?php endif ?>

                    <ul class="social_icons">

                        <?php if( have_rows('social_links_icons', 'option') ): ?>
                            <?php while( have_rows('social_links_icons', 'option') ): the_row(); ?>
                                <li class="<?php the_sub_field('social_links_icon'); ?>">
                                    <a href="<?php the_sub_field('social_links_link'); ?>" target="_blank">
                                        <i class="fa fa-<?php the_sub_field('social_links_icon'); ?>" aria-hidden="true"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif ?>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>