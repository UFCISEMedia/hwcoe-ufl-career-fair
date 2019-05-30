<?php
/**
 * Template Name: Event Information - Company Closed
 * 
 * @package HWCOE_UFL
 *
 */
?>
     <?php while ( have_posts() ) : the_post(); ?>

		<?php esc_attr( the_field( 'company_registration_closes' ) ); ?>

    <?php endwhile; // End of the loop. ?>
