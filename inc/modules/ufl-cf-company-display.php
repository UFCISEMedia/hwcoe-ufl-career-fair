<div class="container content-wrap">
	<div class="row">
		<div class="col-sm-12 codisplay">
			<h2><?php the_sub_field( 'headline' ); ?></h2>			
			<div class="controls">
				<?php while( have_rows( 'buttons' ) ) : the_row(); ?>
					<?php 
						$button_text = strtolower( get_sub_field( 'button_text' ) );
						$button_value = str_replace (' ', '', $button_text);
					?>
					<button type="button" data-filter=".<?php echo $button_value; ?>"><?php the_sub_field( 'button_text' ); ?></button>
				<?php endwhile // have_rows ?>
				<button type="button" data-filter="all">All</button>
			</div>
			<?php echo do_shortcode('[COMPANY_DISPLAY type="post" posts_per_page="50" order="ASC" orderby="title" category_name="current"]'); ?>
		</div>
	</div>
</div>
