<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<footer class="site-footer" id="colophon" role="contentinfo">

			<?php wp_nav_menu(
				array(
					'theme_location'  => 'footer',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav float-sm-left',
					'fallback_cb'     => '',
					'menu_id'         => 'main-footer-menu',
					'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

			<?php

				$facebook = get_field('facebook','option');
				$twitter = get_field('twitter','option');
				$instagram = get_field('instagram','option');
				$pinterest  = get_field('pinterest','option');

			?>

			<ul class="social-nav float-sm-right">

				<?php if( $facebook ): ?>
				<li><a title="Facebbok" href="<?php echo $facebook; ?>" target="_blank" class="nav-link"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
				<?php endif; ?>

				<?php if( $twitter ): ?>
				<li><a title="Twitter" href="<?php echo $twitter; ?>" target="_blank" class="nav-link"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a></li>
				<?php endif; ?>

				<?php if( $instagram ): ?>
				<li><a title="Instagram" href="<?php echo $instagram; ?>" target="_blank" class="nav-link"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
				<?php endif; ?>

				<?php if( $pinterest ): ?>
				<li><a title="Pinterest" href="<?php echo $pinterest; ?>" target="_blank" class="nav-link"><i class="fa fa-pinterest-square fa-2x" aria-hidden="true"></i></a></li>
				<?php endif; ?>

			</ul>

		</footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Contact Modal -->
<div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="contactUsModalLabel">Contact Us</h4>
			</div>
			<div class="modal-body">
				<?php echo Caldera_Forms::render_form( 'CF58589be62e550' ) ; ?>
			</div>
		</div>
	</div>
</div>

<style type="text/css">

	.acf-map {
		width: 100%;
		height: 400px;
	}

	.acf-map-contact-us {
		width: 100%;
		height: 276px;
	}

	.acf-map-travel-info {
		width: 100%;
		height: 400px;
	}

	/* fixes potential theme css conflict */
	.acf-map-contact-us img,
	.acf-map img {
		max-width: inherit !important;
	}

</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbomR1i3Hm9T-azK2OIWRBf24E5LlIg38&libraries=places"></script>
<script type="text/javascript">
    (function($) {

        function new_map( $el ) {

            var $marker = $el.find('.marker');
            var $place = $marker.attr('data-place');
            var zoom = parseInt($marker.attr('data-zoom')) || 17;
            var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            var args = {
                zoom		: zoom,
                center		: latlng,
                mapTypeId	: 'hybrid',
                scrollwheel: false,
                draggable: true
            };

            console.log(args);

            var map = new google.maps.Map( $el[0], args);

            var request = {
                placeId: $place
            };

            var service = new google.maps.places.PlacesService(map);
            service.getDetails(request, callback);

            function callback (place, status) {
                if (status == google.maps.places.PlacesServiceStatus.OK) {

                    var marker = new google.maps.Marker({
                        map: map,
                        place: {
                            placeId: place.place_id,
                            location: place.geometry.location
                        }
                    });

                    var infowindow = new google.maps.InfoWindow({
                        content: '<strong>' + place.name + '</strong><br>' +
                        place.adr_address + '<br>' +
                        place.formatted_phone_number + '<br>' +
						'<a href="' + place.url + '" target="_blank">Get Directions</a>'
                    });

                    // show info window when marker is clicked
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open( map, marker );
                    });

                    infowindow.open( map, marker );

                }
            };

            return map;

        }

        var map = null;

        $(document).ready(function(){
            $('.acf-map').each(function(){
                map = new_map( $(this) );
            });
        });

    })(jQuery);
</script>

</body>

</html>
