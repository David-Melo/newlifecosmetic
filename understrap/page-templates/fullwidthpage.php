<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="entry-header">

	<div class="hero-wrapper interior-hero">
		<div class="hero-image">
			<div class="hero-image-bg"></div>
		</div>
		<div class="hero-foreground-bg"></div>
		<div class="hero-foreground-text">
			<div class="container">
				<div class="float-sm-right col-sm-4">
					<button type="button" class="btn btn-lg btn-warning btn-block hero-cta-button" data-toggle="modal" data-target="#contactUsModal">
						Get More Information
					</button>
				</div>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>
	</div>

</div><!-- .entry-header -->

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
