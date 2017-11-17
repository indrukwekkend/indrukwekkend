<div id="overlay-teamleden" class="hidden">
	<div class="container">
		<div class="row pb-3 pt-5">
			<div class="col-12 text-right">
				<div id="overlay-teamleden-close">
					<span class="text-orange">sluiten</span><span class="icon close-orange ml-3"></span>
				</div>
			</div>
		</div>
		<div class="row px-2 px-md-5 px-lg-6 px-xl-7">
		<?php $args = array('post_type' => 'teamleden', 'post__not_in' => array($post->ID), ); ?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
						<div class="col-6 col-lg-4 mt-sm-5 overlay-teamlid">
							<div class="overlay-teamlid-content">
								<div class="overlay-teamlid-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
								<div class="overlay-teamlid-title">
									<h4><?php the_title(); ?></h4>
									
									<div class="overlay-teamlid-contact d-md-none">
									
										<?php if( get_field('mobile') ) : ?>
											<a class="ml-1 text-black" href="tel:<?php the_field('mobile'); ?>">
												<span class="icon smartphone"></span>
											</a>
										<?php endif; ?>
										
										<?php if( get_field('email') ) : ?>
											<a class="ml-1 text-orange" href="mailto:<?php the_field('email'); ?>">
												<span class="icon mail"></span>
											</a>
										<?php endif; ?>

									</div>

								</div>
								<div class="overlay-teamlid-hover">
									<a class="click-area" href="<?php echo esc_url( get_post_permalink() ); ?>"></a>
									<div class="overlay-teamlid-info">
										<span class="h4 text-white d-inline-block"><?php the_title(); ?></span><br>
										<span class="d-none d-sm-inline" ><?php the_field('company_position'); ?></span>
									</div>
									<div class="overlay-teamlid-contact">
									
									<?php if( get_field('mobile') ) : ?>
										<div class="overlay-teamlid-phone">
											<div class="mb-1 ">
												<span class="icon smartphone"></span>
												<a class="ml-1 text-white" href="tel:<?php the_field('mobile'); ?>"><?php the_field('mobile'); ?></a>
											</div>
										</div>
									<?php endif; ?>

									<?php if( get_field('email') ) : ?>
										<div class="overlay-teamlid-email">
											<div class="mb-2 ">
												<span class="icon mail"></span>
												<a class="ml-1 text-white" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
											</div>
										</div>
									<?php endif; ?>
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