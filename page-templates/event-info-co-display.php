<?php
/**
 * Template Name: Event Information - Company Display
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'company_display_items' ) ); ?>
	
    <?php endwhile; // End of the loop. ?>
