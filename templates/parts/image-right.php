<div class="row justify-content-center single-row">
			<div class="col-10">
				<div class="row">
					<div class="col-lg-6"></div>
					<div class="col-lg-6 text-right">
						<div class="single-title">
							<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mt-5 mt-lg-0">
						<div class="single-content-right">
<?php the_sub_field('content'); ?>
</div>
					</div>
					<div class="col-lg-6 mt-5">
						<div class="single-image-right text-center">
							<img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
						</div>
					</div>
				</div>
			</div>
		</div>