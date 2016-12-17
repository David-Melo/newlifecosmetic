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

<div class="hero-wrapper">
	<div class="hero-image">
		<div class="hero-image-bg"></div>
	</div>
	<div class="hero-foreground"></div>
	<div class="hero-foreground-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 offset-sm-6 text-sm-center">
					<h1>New Life Plastic Surgery</h1>
					<h2>Enhance More Than Your Appearance</h2>
					<h3>Best Price In Town & #1 In Patient Safety</h3>
					<div class="row">
						<div class="col-sm-8 offset-sm-2">
							<?php echo Caldera_Forms::render_form( 'CF5854c18e0b1b6' ) ; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">

						</div>
						<div class="col-sm-8 text-sm-left">
							<div class="hero-bullet">
								<i class="fa fa-check" aria-hidden="true"></i> Located in The Heart of Miami
							</div>
							<div class="hero-bullet">
								<i class="fa fa-check" aria-hidden="true"></i> Board Certified Surgeons
							</div>
							<div class="hero-bullet">
								<i class="fa fa-check" aria-hidden="true"></i> Highly Trained and Knowledgeable Staff
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</div>


<?php get_footer(); ?>
