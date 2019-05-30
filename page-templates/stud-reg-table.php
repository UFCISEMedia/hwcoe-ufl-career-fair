<?php
/**
 * Template Name: Student Registration Table
 * 
 * @package HWCOE_UFL
 *
 */
get_header(); ?>

<?php 
	if ( has_post_thumbnail() ):
		add_filter( 'the_title', 'hwcoe_ufl_title', 10, 2 );
		$custom_meta = get_post_meta( get_the_ID() );
		$custom_meta_image_height = ( isset( $custom_meta['custom_meta_image_height']) )? $custom_meta['custom_meta_image_height'][0] : '';
		$shortcode = sprintf( '[ufl-landing-page-hero headline="%s" image="%d" image_height="%s"]%s[/ufl-landing-page-hero]', 
			get_the_title(),
			get_post_thumbnail_id(),
            $custom_meta_image_height,
			''
		);
		echo do_shortcode( $shortcode );
		remove_filter( 'the_title', 'hwcoe_ufl_title', 10, 2 );
	endif;
?>
<div id="main" class="full-width-content">
	<?php 
		if ( ! has_post_thumbnail() ): 
			echo "<div class=\"container\">";
			hwcoe_ufl_entry_title();
			echo "</div>";
		endif;
	?>
    
     <?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="entry-content stud-reg-content">			
					<?php the_content(); ?>				
				<?php if (! post_password_required($post)) { ?>
					<div class="container">
						<table id="stud-reg-table">					
						<?php
							$args = array( 'post_type' => 'cf-registrations', 'posts_per_page' => 100 );
							$loop = new WP_Query( $args );
						?>
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Status</th>
									<th>Department</th>
									<th>Visa</th>
									<th>Resume</th>
								</tr>
							</thead>
							<tbody>
							<?php
								while ( $loop->have_posts() ) : $loop->the_post();
									echo '<tr>';
									echo '<td>' .get_field( 'student_name' ). '</td>';
									echo '<td>' .get_field( 'student_email' ). '</td>';
									echo '<td>' .get_field( 'student_status' ). '</td>';
									echo '<td>' .get_field( 'student_department' ). '</td>';
									echo '<td>' .get_field( 'student_visa_sponsorship' ). '</td>';
									if(get_field( 'student_resume' )):  //if the field is not empty
										echo '<td><a href="' .get_field( 'student_resume' ). '" download>Resume: ' .get_field( 'student_name' ). '</a></td>'; //display it
									else: ?>
										<td>n/a</td>
									<?php endif; 
									echo '</tr>';
								endwhile;
							?>
							</tbody>
						</table>
					</div>
				<?php } ?> <!--end password protection-->
			</div>
		</article>
    <?php endwhile; // End of the loop. ?>
    
</div>

<?php get_footer(); ?>