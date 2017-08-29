<div class="row justify-content-center pb-5 employee-cases">
	<div class="col-lg-6 text-right">

		<div class="row">
		<?php if( $post_objects = get_field('cases') ): ?>
			<?php foreach( $post_objects as $post): ?>

				<?php setup_postdata($post); ?>

				<div class="col-3 text-center case" href="<?php echo esc_url( get_permalink() ); ?>">
					<div class="row">
						<div class="col-12">
							<img class="img-fluid" src="<?php the_field('header_foreground');?>">
						</div>
					</div>


					<div class="row">
						<div class="col-12">
							<?php the_title(); ?>
						</div>
					</div>
				</div>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		</div>
	</div>
	<div class="col-lg-6 text-right">
		<div class="heading">
			<h4 class="title">
				<span><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", get_field('cases_title')); ?></span>
			</h4>
			<span class="line"></span>
		</div>
	</div>
</div>