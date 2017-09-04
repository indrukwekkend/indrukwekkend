<div class="row justify-content-center pb-5">
	<div class="col-10">
		<div class="row align-items-center part-socialmedia">
			<div class="col-3 text-right">
				<h5><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
			</div>
			<div class="col-6">
				<div class="row justify-content-around">
					<?php if( have_rows('social_media') ): ?>
						<?php while ( have_rows('social_media') ) : the_row(); ?>
							<div class="col text-center text-nowrap" data-toggle="tooltip" data-placement="top" title="<?php the_sub_field('service'); ?>">
								<span class="icon <?php the_sub_field('service'); ?>-orange"></span> <a class="social-link d-none d-xl-inline" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('username'); ?></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-3">
				<?php $btn_arrow = ( get_sub_field('arrow') != "none" ) ? ' btn-arrow arrow-'.get_sub_field('arrow') : ""; ?>
				<a class="btn btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php the_sub_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>