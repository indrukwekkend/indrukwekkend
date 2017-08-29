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
								<div class="col coworkers-item">
									<a class="coworkers-content" href="<?php echo esc_url( get_post_permalink() ); ?>">
										<div class="coworkers-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
										<div class="coworkers-title">
											<h4><?php the_title(); ?></h4>
										</div>
									</a>
								</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php wp_reset_query(); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>