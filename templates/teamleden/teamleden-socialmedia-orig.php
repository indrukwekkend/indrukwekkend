<div class="row single-content">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<div class="row align-items-center teamleden-socialmedia">
					<div class="col-3 socialmedia-title">
						<?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_field('social_media_title')); ?>
					</div>
					<div class="col-6">
						<div class="row">
							<?php if( have_rows('social_media') ): ?>
								<?php while ( have_rows('social_media') ) : the_row(); ?>
									<div class="col text-center">
										<span class="single-icon small <?php the_sub_field('service'); ?>-orange"></span> <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('username'); ?></a>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-3">
						<a class="btn btn-primary" href="mailto:<?php the_field('email');?>"><?php the_field('email'); ?> <span class="arrow-icon up"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>