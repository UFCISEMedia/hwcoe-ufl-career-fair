<?php
/**
 * Template Name: Event Information - Date
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>


		<?php esc_attr( the_field( 'event_month' ) ); ?> <?php esc_attr( the_field( 'event_day' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
