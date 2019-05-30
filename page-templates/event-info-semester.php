<?php
/**
 * Template Name: Event Information - Semester
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'event_semester' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
