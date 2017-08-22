<?php if( $post_objects = get_field('cases') ): ?>
	<div class="row related">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-3 text-right pr-5">
					<span class="related-title"> Bekijk de<br> andere cases
					</span>
				</div>
				<div class="col-9 p-0">
					<div class="related-list">
						<?php foreach( $post_objects as $post): ?>
							<div class="col related-item">
								<a class="related-content" href="<?php echo esc_url( get_post_permalink() ); ?>">
									<div class="related-image" style="background-image:url(<?php the_field('header_foreground');?>);"></div>
									<div class="related-title">
										<?php the_title(); ?>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>