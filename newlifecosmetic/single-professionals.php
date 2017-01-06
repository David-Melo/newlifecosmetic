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
                <div class="col-sm-8 text-xs-center text-md-left">
                    <h1 class="entry-title hidden-sm-up"><?php the_field('full_profesional_name_&_title'); ?></h1>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-lg btn-warning btn-block hero-cta-button" data-toggle="modal" data-target="#contactUsModal">
                        Get More Information
                    </button>
                </div>
            </div>
        </div>
    </div>

</div><!-- .entry-header -->

<div class="wrapper">

    <div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">

        <main class="site-main" id="main">

            <?php while ( have_posts() ) : the_post(); ?>

            <div class="row single-professional-wrapper">

                <div class="col-sm-3">

                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

                    <?php if( have_rows('specialty_procedures') ): ?>

                        <div class="card">
                            <div class="card-header">
                                Specialty Procedures
                            </div>
                            <ul class="list-group list-group-flush">

                                <?php while( have_rows('specialty_procedures') ): the_row();?>
                                <?php $image = get_sub_field('procedure_name');?>
                                <li class="list-group-item"><?php echo $image ?></li>
                                <?php endwhile; ?>

                            </ul>
                            <div class="card-block">
                                <a href="/our-procedures/" class="card-link small">View All New Life Procedures</a>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>

                <div class="col-sm-9">

                    <div class="section-title hidden-md-down">
                        <h1><?php the_field('full_profesional_name_&_title'); ?></h1>
                    </div>

                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title brand-primary">Biography</h4>
                            <p class="card-text"><?php the_field('biography'); ?></p>
                        </div>
                    </div>

                    <?php if( have_rows('medical_licensure_&_certification') ): ?>
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title brand-primary">Medical Licensure & Certification</h4>

                                <?php while( have_rows('medical_licensure_&_certification') ): the_row();?>
                                <?php $image = get_sub_field('licensure__certification_title');?>
                                <p class="card-text"><?php echo $image ?></p>
                                <?php endwhile; ?>

                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if( have_rows('education') ): ?>
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title brand-primary">Education</h4>

                            <?php while( have_rows('education') ): the_row();?>
                            <?php $image = get_sub_field('education_title');?>
                            <p class="card-text"><?php echo $image ?></p>
                            <?php endwhile; ?>

                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( have_rows('medical_training') ): ?>
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title brand-primary">Medical Training</h4>

                            <?php while( have_rows('medical_training') ): the_row();?>
                            <?php $image = get_sub_field('training_title');?>
                            <p class="card-text"><?php echo $image ?></p>
                            <?php endwhile; ?>

                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if( have_rows('awards_and_recognition') ): ?>
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title brand-primary">Awards & Recognition</h4>

                            <?php while( have_rows('awards_and_recognition') ): the_row();?>
                            <?php $image = get_sub_field('item_name');?>
                            <p class="card-text"><?php echo $image ?></p>
                            <?php endwhile; ?>

                        </div>
                    </div>
                    <?php endif; ?>

                </div>

            </div>

            <?php understrap_post_nav(); ?>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->

    </div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
