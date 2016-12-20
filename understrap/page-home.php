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
		<div class="hero-foreground-bg"></div>
		<div class="hero-foreground-text">
			<div class="container hero-container">
				<div class="row">
					<div class="col-sm-6 offset-sm-6 text-xs-center">
						<h1>New Life Plastic Surgery</h1>
						<h2>Enhance More Than Your Appearance</h2>
						<h3>Best Price In Town & #1 In Patient Safety</h3>
						<div class="row">
							<div class="col-sm-10 offset-sm-1">
								<?php echo Caldera_Forms::render_form( 'CF5854c18e0b1b6' ) ; ?>
							</div>
						</div>
						<div class="hero-sub-text">
							<div class="satisfaction-badge">

							</div>
							<div class="hero-subtext-bullets text-sm-left">
								<div class="hero-bullet">
									<i class="fa fa-check fa-lg" aria-hidden="true"></i> Located in The Heart of Miami
								</div>
								<div class="hero-bullet">
									<i class="fa fa-check fa-lg" aria-hidden="true"></i> Board Certified Surgeons
								</div>
								<div class="hero-bullet">
									<i class="fa fa-check fa-lg" aria-hidden="true"></i> Highly Trained and Knowledgeable Staff
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<section class="procedures-container">
    <div class="container">

        <div class="procedures-home text-xs-center">

			<div class="section-title">
				<h1>Start your New year, with a New look</h1>
				<h3>for as low as <strong class="brand-alternate">$26/a month</strong> at <strong class="brand-primary">New Life Plastic Surgery</strong></h3>
			</div>

            <?php echo do_shortcode("[pt_view id=7ba67e5clh]"); ?>


        </div>

    </div>
</section>


<?php get_footer(); ?>
