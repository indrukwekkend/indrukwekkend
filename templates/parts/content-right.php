<div class="row justify-content-center pb-5 part-content">
	<div class="col-12 col-md-11 col-lg-10">
		<div class="row">
			<div class="col-lg-6"></div>
			<div class="col-lg-5 text-right">

				<div class="heading">
					<h4 class="title">
						<span><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
					</h4>
					<span class="line"></span>
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-6 mt-5 mt-xl-0">
					<?php the_sub_field('content'); ?>
			</div>

			<div class="col-lg-6"></div>

		</div>
	</div>
</div>