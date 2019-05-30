<div class="container content-img-wrap">
	<div class="row">
		<?php if( 'left' == get_sub_field( 'image_position' ) ): ?>
			<div class="col-sm-5 col-sm-offset-1 content-with-image">
				<?php
					$image = get_sub_field( 'image' );
					$img_src = $image['sizes']['large'];
					$alt = $image['alt'];
				?>
					<h2><?php the_sub_field( 'headline' ); ?></h2>
					<img src="<?php echo $img_src; ?>" alt="<?php echo $alt; ?>" class="img-full">
			</div>
			<div class="col-sm-5 content-with-image">
				<div><?php the_sub_field( 'content' ); ?></div>
			</div>
			<?php else: ?>
			<div class="col-sm-5 col-sm-offset-1 content-with-image">
				<div><?php the_sub_field( 'content' ); ?></div>
			</div>
			<div class="col-sm-5 content-with-image">
				<?php
					$image = get_sub_field( 'image' );
					$img_src = $image['sizes']['large'];
					$alt = $image['alt'];
				?>
					<h2><?php the_sub_field( 'headline' ); ?></h2>
					<img src="<?php echo $img_src; ?>" alt="<?php echo $alt; ?>" class="img-full">
			</div>
		<?php endif; ?>
	</div>
</div>
