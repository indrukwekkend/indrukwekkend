<div id="overlay-cases" class="hidden">
	<div class="container">
		<div class="row pb-3 pt-5">
			<div class="col-10">
			</div>
			<div class="col-2 text-right">
				<div id="overlay-cases-close">
					<span class="text-orange">sluiten</span><span class="icon close-orange ml-3"></span>
				</div>
			</div>
		</div>
		<div class="row">
		<?php $args = array('post_type' => 'cases', 'post__not_in' => array($post->ID), ); ?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
						<div class="col-3 overlay-case">
							<div class="overlay-case-content">
								<div class="overlay-case-image" style="background-image:url(<?php the_field('header_foreground');?>);"></div>
								<div class="overlay-case-title">
									<h4><?php the_title(); ?></h4>
								</div>
								<div class="overlay-case-hover" >
									<div class="overlay-title">
										<h4><a class="text-white" href="<?php echo esc_url( get_post_permalink() ); ?>"><?php the_title(); ?></a></h4>
										<hr>
										<span class="text-white">
											<?php
											$tags = get_the_tags();
											$total_tags = count($tags);
											$i=0;
											if($tags && ($total_tags > 1) ):
												foreach($tags as $tag):
													$i++;
													echo $tag->name;
													if($i < ($total_tags - 1) ):
														echo ', ';
													elseif($i < ($total_tags) ):
														echo " en ";
													endif;
												endforeach;
											else:
												if($tags):
													foreach($tags as $tag):
														echo $tag->name;
													endforeach;
												endif;
											endif;
											?>
										</span>
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