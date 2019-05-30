<div class="container">
	<div class="double-block-wrap">
	<?php if( have_rows( 'cf_blocks' ) ): ?>
		<?php while( have_rows( 'cf_blocks' ) ): the_row(); ?>
			<?php 
				$image    = get_sub_field( 'image' );
				$alt      = $image['alt'];
				$img_src  = $image['sizes']['large'];
			?>			
			<div class="single-block">
				<a href="<?php esc_url( the_sub_field( 'link' ) ); ?>" target="_blank">
					<img src="<?php echo $img_src; ?>" alt="<?php echo $alt; ?>" class="img-full">
					<h2><?php esc_attr( the_sub_field( 'title' ) ); ?></h2>
				</a>
			</div>
		<?php endwhile // the_row ?>
	<?php endif // have_rows ?>
	</div>
</div>
