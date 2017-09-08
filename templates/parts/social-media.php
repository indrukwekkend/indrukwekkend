<div class="row justify-content-center pb-5">
	<div class="col-10">
		<div class="row align-items-center part-socialmedia">
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 order-1 order-lg-1 text-center text-lg-right mb-4 mb-md-0">
				<h5><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
			</div>
			<div class="col-12 col-lg-4 col-xl-6 order-3 order-lg-2 mb-4 mb-md-0">
				<div class="row justify-content-around">
					<?php if( have_rows('social_media') ): ?>
						<?php while ( have_rows('social_media') ) : the_row(); ?>
							<div class="col text-center text-nowrap">
								<span class="icon <?php the_sub_field('service'); ?>-orange"></span> <a class="social-link d-none d-xl-inline" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('username'); ?></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 order-2 order-lg-3 text-center text-lg-left mb-4 mb-md-0">
				<?php $btn_arrow = ( get_sub_field('arrow') != "none" ) ? ' btn-arrow arrow-'.get_sub_field('arrow') : ""; ?>
				<a class="btn btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php the_sub_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>