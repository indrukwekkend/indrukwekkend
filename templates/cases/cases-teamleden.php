<?php if( $post_objects = get_field('teamleden') ): ?>
	<div class="row cases-teamleden">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-xl-7 order-2 order-xl-1">
							<div class="row justify-content-end pr-4">
								<?php foreach( $post_objects as $post): ?>
									<?php setup_postdata($post); ?>
									<div class="col cases-teamlid align-self-end text-center">
										<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="col-xl-5 order-1 order-xl-2 text-right align-self-end">
							<div class="single-title">
								<span class="heading"><?php echo preg_replace('~((\w+\s){2})~', '$1'. "<br>", 'Wij werkten ook mee'); ?></span> <span class="line"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>