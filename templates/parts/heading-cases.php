<div id="intro" class="row page-header">
	<div class="container pt-6 pb-5">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h1 class="mb-5"><span class="text-orange">Case:</span> <?php the_title(); ?></h1>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-8 text-center">
				<img class="img-fluid" src="<?php the_field('featured_image');?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
			</div>
		</div>
	</div>
</div>