<div id="overlay-vacatures" class="hidden">
	<div class="container">
		<div class="row pb-3 pt-5">
			<div class="col-12 text-right">
				<div id="overlay-vacatures-close">
					<span class="text-orange">sluiten</span><span class="icon close-orange ml-3"></span>
				</div>
			</div>
		</div>
		<div class="row px-2 px-md-5 px-lg-6 px-xl-7">
		<?php $args = array('post_type' => 'vacatures', 'post__not_in' => array($post->ID), ); ?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
						<div class="col-6 col-lg-4 mt-sm-5 overlay-teamlid">
							<div class="overlay-teamlid-content">
								<div class="overlay-teamlid-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
								<div class="overlay-teamlid-title">
									<h4><?php the_title(); ?></h4>
									
									

								</div>
								<div class="overlay-teamlid-hover">
									<a class="click-area" href="<?php echo esc_url( get_post_permalink() ); ?>"></a>
									<div class="overlay-teamlid-info">
										<span class="h4 text-white d-inline-block"><?php the_title(); ?></span><br>
										<span class="d-none d-sm-inline" ><?php the_field('company_position'); ?></span>
									</div>
									<div class="overlay-teamlid-contact">
									
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

