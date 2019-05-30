<?php
/**
 * Template Name: Event Information - Student Closes
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'student_registration_closes' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
