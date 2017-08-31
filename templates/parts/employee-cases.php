<div class="row justify-content-center pb-5 employee-cases">
	<div class="col-10">
		<div class="row">

			<div class="col-lg-6 text-right">
				<div class="row">
					<?php if( $post_objects = get_field('cases') ): ?>
						<?php foreach( $post_objects as $post): ?>

							<?php setup_postdata($post); ?>

							<a class="col-4 case" href="<?php echo esc_url( get_permalink() ); ?>">
									<div class="case-image" style="background-image:url(<?php the_field('header_foreground');?>);">
									</div>
									<div class="case-title">
										<?php the_title(); ?>
									</div>
							</a>

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
	</div>
</div>
