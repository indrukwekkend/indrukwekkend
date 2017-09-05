		<div class="row align-items-center employee-coworkers">
				<div class="col-3 text-right pr-5">
					<span class="coworkers-title">
						<h5>Bekijk wat anderen<br> voor je kunnen doen</h5>
					</span>
				</div>
			
			<div class="col-9 p-0">
				<?php $args = array('post_type' => 'teamleden', 'post__not_in' => array($post->ID), ); ?>
				<?php $query = new wp_query( $args ); ?>

				<?php if($query->have_posts()): ?>
					<div class="coworkers-list">
						<?php while( $query->have_posts() ) : ?>
							<?php $query->the_post(); ?>
								<div class="col-4 coworkers-item">
									<div class="coworkers-content">
										<div class="coworkers-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
										<div class="coworkers-title">
											<h4><?php the_title(); ?></h4>
										</div>
										<div class="coworkers-hover">
											<div class="coworkers-info">
												<h4><a class="text-white" href="<?php echo esc_url( get_post_permalink() ); ?>"><?php the_title(); ?></a></h4>
												<span><?php the_field('company_position'); ?></span>
											</div>
											<div class="coworkers-contact">
												<div class="coworkers-phone">
													<div class="mb-2 px-4">
														<span class="icon smartphone"></span>
														<a class="ml-2 text-white" href="tel:<?php the_field('mobile'); ?>"><?php the_field('mobile'); ?></a>
													</div>
												</div>
												<div class="coworkers-email">
													<div class="mb-2 px-4">
														<span class="icon mail"></span>
														<a class="ml-2 text-white" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php wp_reset_query(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>