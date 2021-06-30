<?php 
/**
 * Map View Single Event
 * This file contains one event in the map
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/map/single-event.php
 *
 * @package TribeEventsCalendar
 * 
 * @cmsmasters_package 	Language School
 * @cmsmasters_version 	1.1.7
 *
 */


if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

global $post;

$venue_details = tribe_get_venue_details();

// Venue microformats
$has_venue         = ( $venue_details ) ? ' vcard' : '';
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';
?>

<!-- Event Image -->
<?php echo tribe_event_featured_image( null, 'cmsmasters-square-thumb' ) ?>

<div class="cmsmasters_events_list_event_wrap">
	<div class="cmsmasters_event_date">
		<div class="cmsmasters_event_day"><?php echo tribe_get_start_date(null, false, 'j'); ?></div>
		<div class="cmsmasters_event_month"><?php echo tribe_get_start_date(null, false, 'M'); ?></div>
	</div>
	
	<div class="cmsmasters_events_list_event_header">
		<!-- Event Cost -->
		<?php if ( tribe_get_cost() ) : ?> 
			<div class="tribe-events-event-cost">
				<span><?php echo tribe_get_cost( null, true ); ?></span>
			</div>
		<?php endif; ?>
		
		
		<!-- Event Title -->
		<?php do_action( 'tribe_events_before_the_event_title' ) ?>

		<!-- Event Distance -->
		<?php echo tribe_event_distance(); ?>

		<h4 class="tribe-events-map-event-title tribe-events-list-event-title summary">
			<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title() ?>" rel="bookmark">
				<?php the_title() ?>
			</a>
		</h4>
		<?php do_action( 'tribe_events_after_the_event_title' ) ?>
	</div>
	
	
	<!-- Event Meta -->
	<?php do_action( 'tribe_events_before_the_meta' ) ?>
	<div class="tribe-events-event-meta <?php echo esc_attr( $has_venue . $has_venue_address ); ?>">

		<!-- Schedule & Recurrence Details -->
		<div class="updated published time-details cmsmasters_theme_icon_time">
			<?php echo tribe_events_event_schedule_details() ?>
		</div>
		
		<?php if ( $venue_details ) : ?>
			<!-- Venue Display Info -->
			<div class="tribe-events-venue-details cmsmasters_theme_icon_user_address">
				<?php echo implode( ', ', $venue_details ); ?>
			</div> <!-- .tribe-events-venue-details -->
		<?php endif; ?>

	</div><!-- .tribe-events-event-meta -->
	<?php do_action( 'tribe_events_after_the_meta' ) ?>
	
	
	<!-- Event Content -->
	<?php do_action( 'tribe_events_before_the_content' ) ?>
	<div class="tribe-events-map-event-description tribe-events-list-event-description tribe-events-content description entry-summary">
		<p><?php echo tribe_events_get_the_excerpt() ?></p>
		<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="tribe-events-read-more" rel="bookmark"><?php esc_html_e( 'Find out more', 'language-school' ) ?> &raquo;</a>
	</div><!-- .tribe-events-map-event-description -->
	<?php do_action( 'tribe_events_after_the_content' ) ?>
</div>
