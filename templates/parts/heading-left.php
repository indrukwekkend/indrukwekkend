<div class="row pb-5">
	<div class="col-12">
		<div class="row">
			<div class="col-lg-1"></div>
			<div class="col-lg-5">

				<div class="heading">
					<h4 class="title">
						<span><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
					</h4>
					<span class="line"></span>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 mt-5 mt-xl-0 text-center">

				<figure class="figure mt-4 mt-xl-6">
					<img src="<?php the_sub_field('image'); ?>" class="figure-img img-fluid" alt="<?php the_sub_field('image_description');?>">
					<figcaption class="figure-caption"><?php the_sub_field('image_description');?></figcaption>
				</figure>

			</div>

			<div class="col-lg-6">
				<?php the_sub_field('content'); ?>
			</div>

		</div>
	</div>
</div>