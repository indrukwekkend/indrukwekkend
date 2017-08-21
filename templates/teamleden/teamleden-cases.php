<?php if( have_rows('teamleden_cases') ): ?>
	<?php while ( have_rows('teamleden_cases') ) : the_row(); ?>

		<div class="row teamleden-cases">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-10">
						<div class="row">
							<div class="col-lg-6">
								<div class="row">
									<?php if( $post_objects = get_sub_field('cases') ): ?>
										<?php foreach( $post_objects as $post): ?>

											<?php setup_postdata($post); ?>

											<div class="col teamleden-case-item">
												<div class="case-content">

													<div class="case-image" style="background-image:url(<?php the_field('header_foreground');?>);">
													</div>

													<div class="case-title">
														<a href="<?php echo esc_url( get_permalink() ); ?>">
															<?php the_title(); ?>
														</a>
													</div>
												</div>

											</div>

										<?php endforeach; ?>
										<?php wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
							</div>
							<div class="col-lg-6 text-right">
								<div class="single-title">
									<span class="heading"><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", get_sub_field('cases_title')); ?></span> <span class="line"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
<?php endif; ?>