<div class="container tile-tab-content <?php the_sub_field( 'class' ); ?>">
	<h2><?php the_sub_field( 'headline' ); ?></h2>				
	<?php if( have_rows( 'tile_tabs' ) ): ?>
		<?php while( have_rows( 'tile_tabs' ) ): the_row(); ?>
			<div class="col-sm-12">
				<div class="row tile-tab-wrap">
					<div class="tab-title">
						<h3><?php the_sub_field( 'tab_title' ); ?></h3>
					</div>
					<div class="tab-content">
						<div><?php the_sub_field( 'tab_content' ); ?></div>
					</div>
				</div>
				<hr>
			</div>
		<?php endwhile // the_row ?>
	<?php endif // have_rows ?>
</div>
