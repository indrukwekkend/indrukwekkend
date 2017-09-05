<div id="overlay-teamleden" class="hidden">
	<div class="container">
		<div class="row pb-3 pt-5">
			<div class="col-10">
			</div>
			<div class="col-2 text-right">
				<div id="overlay-teamleden-close">
					<span class="text-orange">sluiten</span><span class="icon close-orange ml-3"></span>
				</div>
			</div>
		</div>
		<div class="row px-7">
		<?php $args = array('post_type' => 'teamleden', 'post__not_in' => array($post->ID), ); ?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
						<div class="col-4 mt-5 overlay-teamlid">
							<div class="overlay-teamlid-content">
								<div class="overlay-teamlid-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
								<div class="overlay-teamlid-title">
									<h4><?php the_title(); ?></h4>
									<div class="overlay-teamlid-functie pt-3">
										<?php the_field('company_position');?>
									</div>
								</div>
								<div class="overlay-teamlid-hover">
									<div class="overlay-teamlid-info">
										<h4><a class="text-white" href="<?php echo esc_url( get_post_permalink() ); ?>"><?php the_title(); ?></a></h4>
										<span><?php the_field('company_position'); ?></span>
									</div>
									<div class="overlay-teamlid-contact">
										<div class="overlay-teamlid-phone">
											<div class="mb-2 px-4">
												<span class="icon smartphone"></span>
												<a class="ml-2 text-white" href="tel:<?php the_field('mobile'); ?>"><?php the_field('mobile'); ?></a>
											</div>
										</div>
										<div class="overlay-teamlid-email">
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
			<?php endif; ?>
		</div>
	</div>
</div>