<div class="row py-3 part-socialmedia">
	<div class="col-12">
		<div class="row align-items-center">
			<div class="col-3 text-right">
				<h5><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('socialmedia_title')); ?></h5>
			</div>
			<div class="col-6">
				<div class="row">
					<?php if( have_rows('socialmedia') ): ?>
						<?php while ( have_rows('socialmedia') ) : the_row(); ?>
							<div class="col text-center text-nowrap">
								<span class="single-icon small <?php the_sub_field('service'); ?>-orange"></span> <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('username'); ?></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-3">
				<a class="btn btn-primary" href="<?php the_field('socialmedia_btn_url');?>"><?php the_sub_field('socialmedia_btn_text'); ?> <span class="arrow-icon up"></span></a>
			</div>
		</div>
	</div>
</div>