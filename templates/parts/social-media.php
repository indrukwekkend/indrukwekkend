<div class="row justify-content-center pb-5">
	<div class="col-12 col-lg-10">
		<div class="row align-items-center part-socialmedia">
			<div class="col-12 col-md-6 col-lg-4 col-xl-3 text-lg-right mb-4 mb-md-0">
				<h5 class="d-none d-lg-block"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
				<h4 class="d-block d-lg-none"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
			</div>
			<div class="col-12 col-xl-6 mb-4 mb-lg-0">
				<div class="row justify-content-around">
					<?php if( have_rows('social_media') ): ?>
						<?php while ( have_rows('social_media') ) : the_row(); ?>
							<div class="col-12 col-xl-4 my-2 my-lg-2 text-xl-center text-nowrap">
								<div class="row no-gutters">
									<div class="col-2 col-sm-1 col-xl-3">
										<span class="icon <?php the_sub_field('service'); ?>-orange"></span>
									</div>
									<div class="col-10 col-sm-11 col-xl-9">
										<a class="social-link" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('username'); ?></a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-12 col-lg-4 col-xl-3 text-lg-left mb-4 mb-md-0">
				<?php $btn_arrow = ( get_sub_field('arrow') != "none" ) ? ' btn-arrow arrow-'.get_sub_field('arrow') : ""; ?>
				<a class="d-lg-none btn btn-block btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php the_sub_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
				<a class="d-none d-lg-inline-block btn btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php the_sub_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>