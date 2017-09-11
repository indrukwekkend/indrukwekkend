<?php if( $post_objects = get_field('cases') ): ?>
			<div class="row align-items-center related-cases">
				<div class="col-12 col-lg-3 py-3 py-lg-0 text-center text-lg-right pr-5">
					<span class="related-title">
						<h5 class="d-none d-lg-block"><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", get_field('cases_title')); ?></h5>
						<h4 class="d-block d-lg-none"><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", get_field('cases_title')); ?></h4>
					</span>
				</div>
				<div class="col-12 col-lg-9 p-0">
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