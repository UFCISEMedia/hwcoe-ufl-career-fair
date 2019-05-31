<?php
/**
 * Template Name: Event Information - Start Time
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'event_start_time' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
