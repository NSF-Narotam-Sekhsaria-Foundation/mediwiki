<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mediwikiwp
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        
        <!-- Favicon -->
        <?php $favicon = get_field('favicon', 'option'); ?>
        <link rel="shortcut icon" href="<?php echo $favicon ?>">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->        
        <?php wp_head(); ?>
        <?php
        if(is_user_logged_in()){
            echo '<style>.navbar-fixed-top{top:32px !important;}</style>';
        }
        ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131761134-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-131761134-1');
        </script>

    </head>
 
    <body>
        <img src="<?php echo get_template_directory_uri(); ?>/images/loader.gif" class="loaderFullPage" alt="">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid padding-zero-mobile">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <div type="button" class="navbar-toggle collapsed mobile-menu-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <p class="mobile_menu_button">Menu</p>
                    </div>
                    <div class="brand mobile-menu-click">
                       

                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

						<?php $logo = get_field('logo', 'option'); ?>

						<?php if ($logo!=""): ?>

                            <img src="<?php echo $logo ?>" class="img-responsive logo" alt="Logo">

						<?php endif ?>


                            <!-- Mobile Menu Heading -->
                            <h3 class="mobile_menu_heading" style="display: none;">Our Services</h3>
                        </a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  	<?php wp_nav_menu( array( 
                  		'theme_location' => 'menu-1', 
                  		'menu_class' => 'nav navbar-nav navbar-right desktop-menu' 
                  	) ); ?>

                    <ul style="display: none; width: 100%" class="nav navbar-nav navbar-right nav nav-stacked mobile-menu-accordion panel-group" id="accordion1">			        

                        <?php 
                            if( have_rows('menu', 'option') ) {
                                $i = 0;
                                while( have_rows('menu', 'option') ) { 
                                    the_row(); 
                                    ?>
                                    <li class="panel panel-default accordian_heading"> 
                                        <a><?php the_sub_field('main_menu_heading'); ?> <i data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $i; ?>" class="fa fa-plus"></i></a>
                                        <ul id="<?php echo $i; ?>" class="collapse">
                                            <?php 
                                                if( have_rows('sub_menus', 'option') ) {
                                                    while( have_rows('sub_menus', 'option') ) { 
                                                        the_row();
                                                        ?>
                                                        <li><a href="<?php the_sub_field('menu_link'); ?>"><?php the_sub_field('menu_label'); ?></a></li>
                                                        <?php 
                                                    }
                                                }    
                                            ?>
                                        </ul>                          
                                    </li>
                                   <?php
                                   $i++; 
                                }
                            }    
                        ?>

                        <?php wp_nav_menu( array( 
                            'theme_location' => 'primary_mobile_menu', 
                            'menu_class' => 'main_menu1' 
                        ) ); ?>                     
                    </ul>    
                </div>
                
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>