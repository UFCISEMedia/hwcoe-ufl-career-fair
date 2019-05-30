<?php
/**
 * Template Name: Event Information - Location
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'event_location' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
