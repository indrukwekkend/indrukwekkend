<div class="row teamleden-extra">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<div class="row">
					<div class="col-lg-6">
						<div class="single-title">
							<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_field('extra_title')); ?></span> <span class="line"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mt-5">
					</div>
					<div class="col-lg-6">
						<?php the_field('extra_content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>