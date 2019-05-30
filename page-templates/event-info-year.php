<?php
/**
 * Template Name: Event Information - Year
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'event_year' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
