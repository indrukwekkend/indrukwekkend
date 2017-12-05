<div class="row justify-content-center pb-5 part-heading part-showcase-imac">
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

			<div class="col-lg-6">
				<?php the_sub_field('content'); ?>
			</div>

			<div class="col-lg-6 mt-5 mt-xl-0"></div>

		</div>
		<div class="row">
			<div class="col-12 text-center">
				<?php if(preg_match('#(?:https?://)?(?:www.)?(?:player.)?vimeo.com/(?:[a-z]*/)*([0-9]{6,11})[?]?.*#', get_sub_field('video_source'), $ID)): ?>
					<iframe src="https://player.vimeo.com/video/<?php echo $ID[1]; ?>?autoplay=1&amp;loop=1&amp;autopause=0" frameborder="0" class="qnr-computer-video" data-qnr-video-screen-id="0"></iframe>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>