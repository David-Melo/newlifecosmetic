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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title"
      content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">





    <nav class="navbar navbar-dark bg-inverse">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Professionals</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="responsiveNavbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Procedures</a>
                        <div class="dropdown-menu" aria-labelledby="responsiveNavbarDropdown">
                            <a class="dropdown-item" href="#">Mommy Makeover</a>
                            <a class="dropdown-item" href="#">Face</a>
                            <a class="dropdown-item" href="#">Breast</a>
                            <a class="dropdown-item" href="#">Body</a>
                            <a class="dropdown-item" href="#">Buttock Augmentation</a>
                            <a class="dropdown-item" href="#">Male Plastic Surgery</a>
                            <a class="dropdown-item" href="#">Lap-Band</a>
                            <a class="dropdown-item" href="#">Orbera</a>
                            <a class="dropdown-item" href="#">Med Spa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Med Spa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Financing</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-sm-right">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>APPOINTMENTS</h3>
        <p>APPOINTMENTS</p>
    </div>
