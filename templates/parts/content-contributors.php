<div class="row">
	<div class="col-12 col-xl-10">
		<div class="row align-items-center part-contributors">
			<div class="col-lg-7 order-2 order-lg-1">

				<?php $args = array(
					'post_type' => 'teamleden',
					'meta_query' => array(
						'relation' => 'OR',
							array(
								'key' => 'cases',
								'value' => get_the_ID(),
								'compare' => 'LIKE'
							)
						),
					); ?>
				<?php $query = new wp_query( $args ); ?>

				<?php if($query->have_posts()): ?>
					<div class="row justify-content-end contributors-list">
					<?php while( $query->have_posts() ) : ?>
						<?php $query->the_post(); ?>

						<div class="col contributor">
							<a class="contributor-content" href="<?php echo esc_url( get_post_permalink() ); ?>">
								<div class="contributor-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
								<div class="contributor-title">
									<?php the_title(); ?>
								</div>
								<div class="contributor-hover">
									<div class="contributor-info">
										<h4 class="text-white"><?php the_title(); ?></h4>
										<span><?php the_field('company_position'); ?></span>
									</div>
								</div>
							</a>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="col-lg-5 order-1 order-xl-2 mb-5 mb-xl-0 text-right">

				<div class="heading">
					<h4 class="title">
						<span>Wij werkten <br>ook mee</span>
					</h4>
					<span class="line"></span>
				</div>

			</div>
		</div>
	</div>
</div>