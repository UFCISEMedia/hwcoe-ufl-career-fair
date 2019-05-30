<div class="timeline-display-wrapper <?php the_sub_field( 'class' ); ?>">
	<?php if(get_sub_field('section_headline')) { 
		echo '<h2>' . get_sub_field( 'section_headline' ) . '</h2>';
	}?>
	<div class="container timeline-line">
		<div class="timeline-wrap">
		<?php if( have_rows( 'timeline_display' ) ): ?>
			<?php while( have_rows( 'timeline_display' ) ): the_row(); ?>
				<div class="timeline-box">
					<h2><?php esc_attr( the_sub_field( 'headline' ) ); ?></h2>
					<h3><?php esc_attr( the_sub_field( 'date' ) ); ?></h3>
					<?php if(get_sub_field('content')) { 
						echo '<p>' .get_sub_field( 'content' ). '</p>';
					}?>
				</div>
			<?php endwhile // the_row ?>
		<?php endif // have_rows ?>
		</div>
	</div>
</div>
