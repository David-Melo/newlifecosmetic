<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="entry-header">

    <div class="hero-wrapper interior-hero">
        <div class="hero-image">
            <div class="hero-image-bg"></div>
        </div>
        <div class="hero-foreground-bg"></div>
        <div class="hero-foreground-text">
            <div class="container">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
        </div>
    </div>

</div><!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_html( $container ); ?>" id="content">

        <div class="row">

            <div class="col-sm-8">

                <?php

                    $images = get_field('gallery_images');

                    if( $images ):

                ?>

                <div class="row">

                    <?php foreach( $images as $image ): ?>

                    <div class="col-sm-4">
                        <div class="gallery-preview" style="max-height: 74px;overflow: hidden">
                            <img class="card-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>

                <?php endif; ?>

            </div>

            <div class="col-sm-4">

                <div class="sidebar-cta-form card card-inverse card-warning">
                    <div class="card-header text-xs-center">
                        <h3>Get More Information</h3>
                        <h6>Take the Next Step Towards a New Life</h6>
                    </div>
                    <div class="card-block">
                        <?php echo Caldera_Forms::render_form( 'CF585b46ecb6520' ) ; ?>
                    </div>
                    <div class="card-footer">
                        All Information is Kept Confidential
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>
