<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
$posts_style = get_theme_mod( 'understrap_posts_index_style' );

if ( is_front_page() && is_home() ) {
	get_sidebar( 'hero' );

	get_sidebar( 'statichero' );
}
?>

<div class="entry-header">

    <div class="hero-wrapper interior-hero">
        <div class="hero-image">
            <div class="hero-image-bg"></div>
        </div>
        <div class="hero-foreground-bg"></div>
        <div class="hero-foreground-text">
            <div class="container">
                <?php the_title( '<h1 class="entry-title text-xs-center">', '</h1>' ); ?>
            </div>
        </div>
    </div>

</div><!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_html( $container ); ?>" id="content">

        <div class="row">

            <div class="col-sm-6">

                <h2 class="text-uppercase"><?php echo get_field('full_site_name','option'); ;?></h2>
                <h3><?php echo get_field('address_1','option'); ;?></h3>
                <h3><?php echo get_field('address_2','option'); ;?></h3>
                <h1 class="brand-primary"><?php echo get_field('phone_number','option'); ;?></h1>

                <?php

                    $location = get_field('google_map','option');
                    $place = get_field('google_places_id','option');

                    if( !empty($location) ):

                ?>

                <div class="acf-map acf-map-contact-us">
                    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-place="<?php echo $place; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                </div>

                <?php endif; ?>

            </div>

            <div class="col-sm-6">

                <div class="card remove-bottom">
                    <div class="card-header text-xs-center">
                        Contact Us & Get Started Today
                    </div>
                    <div class="card-block">
                        <?php echo Caldera_Forms::render_form( 'CF586146c391628' ) ; ?>
                    </div>
                    <div class="card-footer text-muted text-xs-center">
                        All Info Is Kept Confidential
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
