<div class="row justify-content-center pb-5">
	<div class="col-10">
		<div class="row align-items-center part-socialmedia">
			<div class="col-3 text-right">
				<h5><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
			</div>
			<div class="col-6">
				<div class="row">
					<?php if( have_rows('socialmedia') ): ?>
						<?php while ( have_rows('socialmedia') ) : the_row(); ?>
							<div class="col text-center text-nowrap">
								<span class="icon <?php the_sub_field('service'); ?>-orange"></span> <a class="social-link" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('username'); ?></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-3">
				<a class="btn btn-lg btn-primary btn-arrow arrow-up" href="<?php the_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>