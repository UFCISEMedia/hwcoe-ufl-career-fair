<?php
/**
 * Template Name: Event Information - End Time
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'event_end_time' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
