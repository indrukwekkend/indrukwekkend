<div class="justify-content-center pb-5 part-socialmedia">
	<div class="col-12 col-md-11 col-lg-12">
		<div class="row justify-content-md-center align-items-center">

			<div class="col-12 col-lg-3 mb-2 mb-lg-0 text-xl-right">
				<h5 class="d-none d-xl-block"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
				<h4 class="d-none d-sm-block d-xl-none"><?php the_sub_field('socialmedia_title'); ?></h4>
				<h4 class="d-block d-sm-none"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h4>
			</div>

			<div class="col-12 col-sm-11 col-lg-7 col-xl-6 mb-xl-0">
				<div class="row justify-content-around">
					<?php if( have_rows('social_media') ): ?>
						<?php while ( have_rows('social_media') ) : the_row(); ?>
							<div class="col-12 col-md-4 mb-3 mb-lg-0 my-lg-2  text-nowrap">
								<div class="row no-gutters">
									<div class="col text-left ">
										<span class="icon <?php the_sub_field('service'); ?>-orange"></span>
										<a class="social-link" href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('username'); ?></a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-12 col-lg-4 col-xl-3 text-lg-left mt-md-2 mt-xl-0">
				<?php $btn_arrow = ( get_sub_field('arrow') != "none" ) ? ' btn-arrow arrow-'.get_sub_field('arrow') : ""; ?>
				<a class="d-xl-none btn btn-block btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php the_sub_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
				<a class="d-none d-xl-inline-block btn btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php the_sub_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>