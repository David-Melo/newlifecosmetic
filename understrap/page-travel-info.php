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

<div class="wrapper travel-info-wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_html( $container ); ?>" id="content">

        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

        <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        ?>

    <?php endwhile; // end of the loop. ?>





        <div class="card card-outline-warning">
            <div class="card-header text-xs-center">
                Contact Us & We'll Start Planning Your Trip
            </div>
            <div class="card-block">
                <?php echo Caldera_Forms::render_form( 'CF5862ff036bb24' ) ; ?>
            </div>
            <div class="card-footer text-muted text-xs-center">
                All Info Is Kept Confidential
            </div>
        </div>

        <?php

            $location = get_field('google_map','option');
            $place = get_field('google_places_id','option');

            if( !empty($location) ):

        ?>

        <div class="acf-map acf-map-travel-info">
            <div class="marker" data-zoom="12" data-lat="<?php echo $location['lat']; ?>" data-place="<?php echo $place; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>

        <?php endif; ?>

    </div>

</div>

<?php get_footer(); ?>
