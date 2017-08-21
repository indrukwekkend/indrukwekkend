<div class="row teamleden">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-3 text-right pr-5">
				<span class="teamleden-title"> Bekijk wat de<br> andere voor<br> je kunnen doen
				</span>
			</div>
			
			<div class="col-9 p-0">
				<?php $args = array('post_type' => 'teamleden', 'post__not_in' => array($post->ID), ); ?>
				<?php $query = new wp_query( $args ); ?>

				<?php if($query->have_posts()): ?>
					<div class="teamleden-list">
						<?php while( $query->have_posts() ) : ?>
							<?php $query->the_post(); ?>
								<div class="col teamleden-item">
									<a class="teamleden-content" href="<?php echo esc_url( get_post_permalink() ); ?>">

										<div class="teamleden-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>

										<div class="teamleden-title">
											<?php the_title(); ?>
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
	</div>
</div>