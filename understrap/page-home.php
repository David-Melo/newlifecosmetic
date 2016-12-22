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
				<h1><?php the_field('heading'); ?></h1>
				<h3><?php the_field('sub_heading'); ?></h3>
			</div>

			<?php if( have_rows('featured_procedures') ): ?>

			<div class="row featured_procedures">

				<?php while( have_rows('featured_procedures') ): the_row();

					$image = get_sub_field('procedure_image');
					$name = get_sub_field('procedure_name');
					$link = get_sub_field('procedure_link');
					$target = get_sub_field('target_window');
					$hover = get_sub_field('hover_text');

					?>

				<div class="col-sm-2">

					<?php if( $link ): ?>

					<a class="featured-procedure" href="<?php echo $link; ?>" target="<?php echo $target; ?>">

						<div class="featured-procedure-image">
							<img class="rounded-circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
							<?php if( $hover ): ?>
							<div class="featured-procedure-overlay rounded-circle"><?php echo $hover; ?></div>
							<?php endif; ?>
						</div>

						<?php if( $name ): ?>
							<h3><?php echo $name; ?></h3>
						<?php endif; ?>

					</a>

					<?php endif; ?>

				</div>

				<?php endwhile; ?>

			</div>

			<?php endif; ?>


        </div>

    </div>
</section>

<section class="about-us-container">
	<div class="container">

		<div class="row">

			<div class="col-sm-5">
				<?php echo do_shortcode( '[acf_gallery_slider acf_field="home_slides" show_caption="false"]' ); ?>
			</div>

			<div class="col-sm-7">
				<h1><?php the_field('about_us_heading'); ?></h1>
				<div class="home-about-us"><?php the_field('about_us'); ?></div>
			</div>

		</div>

	</div>
</section>

<section class="additional-info-container">
	<div class="container">

		<div class="row">

			<div class="col-sm-7">

				<ul>

					<h1><?php the_field('additional_info_title'); ?></h1>

					<?php if( have_rows('additional_info_bullets') ): ?>

					<ul class="additional-info-bullets">

						<?php while( have_rows('additional_info_bullets') ): the_row();

					$icon = get_sub_field('icon');
					$text = get_sub_field('text');

					?>

						<li>
							<i class="<?php echo $icon; ?>"></i> <?php echo $text; ?>
						</li>

						<?php endwhile; ?>

					</ul>

					<?php endif; ?>

				</ul>

			</div>

			<div class="col-sm-5">

				<div class="featured-video">
					<div class="embed-container">
						<?php the_field('featured_video'); ?>
					</div>
				</div>

			</div>

		</div>

	</div>
</section>

<section class="secondary-cta-container">
	<div class="container">

		<div class="float-sm-right col-sm-4">
			<button type="button" class="btn btn-lg btn-warning btn-block hero-cta-button" data-toggle="modal" data-target="#contactUsModal">
				Book Your Appointment
			</button>
		</div>
		<h1 class="entry-title">Take The Next Step Towards <strong>A New Life</strong></h1>

	</div>
</section>

<section class="testimonials-container">
	<div class="container">

		<div class="section-title text-sm-center">
			<h1>Some of the Things Our Past Patients Have to Say</h1>
		</div>

		<?php echo do_shortcode("[pt_view id=9132195p12]"); ?>

	</div>
</section>

<?php

	$location = get_field('google_map','option');
	$place = get_field('google_places_id','option');

	if( !empty($location) ):

?>

<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-place="<?php echo $place; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>

<?php endif; ?>

<?php get_footer(); ?>

