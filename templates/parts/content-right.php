<div class="row pb-5">
	<div class="col-12">
		<div class="row">
			<div class="col-lg-6"></div>
			<div class="col-lg-5 text-right">

				<div class="heading">
					<span class="title h4"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
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