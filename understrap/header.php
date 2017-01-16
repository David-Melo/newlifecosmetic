<?php
        /**
        * The header for our theme.
        *
        * Displays all of the <head> section and everything up till <div id="content">
        *
        * @package understrap
        */

        $container = get_theme_mod( 'understrap_container_type' );
        ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title"
      content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <style>
        .hero-foreground {
            background: url('<?=get_template_directory_uri();?>/images/hero-foreground.png') center no-repeat;
        }
        .hero-foreground-bg {
            background: url('<?=get_template_directory_uri();?>/images/bg.png');
        }
        .satisfaction-badge {
            background: url('<?=get_template_directory_uri();?>/images/satisfaction-guaranteed.png');
        }
    </style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header class="mobile clearfix hidden-md-up">

        <?php

        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        ?>


            <?php if ( ! has_custom_logo() ) { ?>
            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
               title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
            <?php } else {

            ?>

                <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                   title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                    <img src="<?php echo $image[0]; ?>">
                </a>

            <?php

            } ?><!-- end custom logo -->


            <span class="header-call-to-action float-sm-right align-middle">
                <h1>Call Today <a href="tel:1.305.985.6134">305-985-6134</a></h1>
                <h3>To Schedule Complimentary Consultation</h3>
            </span>


    </header>

    <header class="desktop clearfix hidden-sm-down">
        <div class="container">

            <div class="language-container">
                <a href="#" onclick="doGTranslate('en|en');return false;" title="English" class="gflag nturl alt_flag us_flag"><img src="/wp-content/plugins/gtranslate/blank.png" height="24" width="24" alt="English" /></a><a href="#" onclick="doGTranslate('en|pt');return false;" title="Português" class="gflag nturl alt_flag br_flag"><img src="/wp-content/plugins/gtranslate/blank.png" height="24" width="24" alt="Português" /></a><a href="#" onclick="doGTranslate('en|es');return false;" title="Español" class="gflag nturl" style="background-position:-600px -200px;"><img src="/wp-content/plugins/gtranslate/blank.png" height="24" width="24" alt="Español" /></a>
            </div>

            <?php if ( ! has_custom_logo() ) { ?>
            <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"
               title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a>
            <?php } else {
						the_custom_logo();
            } ?><!-- end custom logo -->


            <span class="header-call-to-action float-sm-right align-middle">
                Call Today <a href="tel:1.305.985.6134">305-985-6134</a> To Schedule Complimentary Consultation
            </span>

        </div>
    </header>

<div class="hfeed site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

        <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content',
		'understrap' ); ?></a>

        <nav class="navbar navbar-dark bg-inverse site-navigation" itemscope="itemscope"
             itemtype="http://schema.org/SiteNavigationElement">

            <div class="<?php echo esc_html( $container ); ?>" >

                <div class="navbar-header">

                    <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
                    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse"
                            data-target=".exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false"
                            aria-label="Toggle navigation"></button>

                </div>

                <div id="exCollapsingNavbar" class="collapse navbar-toggleable-xs exCollapsingNavbar clearfix">

                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'nav navbar-nav float-sm-left',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-site-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                            )
                    ); ?>

                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'alt',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'nav navbar-nav float-sm-right',
                            'fallback_cb'     => '',
                            'menu_id'         => 'alt-site-menu',
                            'walker'          => new WP_Bootstrap_Navwalker(),
                            )
                    ); ?>

                </div>

            </div> <!-- .container -->

        </nav><!-- .site-navigation -->

    </div><!-- .wrapper-navbar end -->