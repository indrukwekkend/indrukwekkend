<div class="row py-5">
	<div class="col-12">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5">

				<div class="heading">
					<span class="title h4"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 mt-5 mt-xl-0"></div>

			<div class="col-lg-6">
				<?php the_sub_field('content'); ?>
			</div>

		</div>
		<div class="row">
			<div class="col-12 pt-5 text-center">
				<div class="gallery">
					<?php if( have_rows('images') ): ?>
						<?php $i;?>
						<?php while ( have_rows('images') ) : the_row(); ?>
							<?php $i++;?>
							<figure class="figure image-<?php echo $i; ?>">
								<img src="<?php the_sub_field('image'); ?>" class="figure-img img-fluid">
							</figure>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</div>