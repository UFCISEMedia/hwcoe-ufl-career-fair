<?php
/**
 * Template Name: Event Information - Display Name
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'event_display_name' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
