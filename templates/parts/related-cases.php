<?php if( $post_objects = get_field('related_cases') ): ?>
			<div class="row align-items-center related-cases">
				<div class="col-3 text-right pr-5">
					<span class="related-title">
						<h5>Bekijk de<br> andere cases</h5>
					</span>
				</div>
				<div class="col-9 p-0">
					<div class="related-list">
						<?php foreach( $post_objects as $post): ?>
							<div class="col related-item">
								<a class="related-item-content" href="<?php echo esc_url( get_post_permalink() ); ?>">
									<div class="related-item-image" style="background-image:url(<?php the_field('header_foreground');?>);"></div>
									<div class="related-item-title">
										<h4><?php the_title(); ?></h4>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
<?php endif; ?>