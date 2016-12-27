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
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </div>
        </div>
    </div>

</div><!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_html( $container ); ?>" id="content">

        <div class="row">

            <div class="col-sm-6">

                <?php while ( have_posts() ) : the_post(); ?>

                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

                    <div class="entry-content">

                        <?php the_content(); ?>

                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                                        'after'  => '</div>',
                                        ) );
                        ?>

                    </div><!-- .entry-content -->

                    <footer class="entry-footer">

                        <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

                    </footer><!-- .entry-footer -->

                </article><!-- #post-## -->

                <?php endwhile; // end of the loop. ?>

            </div>

            <div class="col-sm-6">

                <div class="sidebar-cta-form card card-inverse card-warning">
                    <div class="card-header text-xs-center">
                        <h3>Get More Information</h3>
                        <h6>Take the Next Step Towards a New Life</h6>
                    </div>
                    <div class="card-block">
                        <?php echo Caldera_Forms::render_form( 'CF585c57bec5141' ) ; ?>
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
