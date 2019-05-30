<?php
/**
 * Template Name: Event Information - Company Marketing
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'company_marketing_deadline' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
