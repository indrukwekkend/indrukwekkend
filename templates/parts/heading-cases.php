<!-- heading-cases -->
<div id="intro" class="page-header">
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

				<?php $image = get_field('featured_image'); ?>
				<?php $thumb = $image['sizes']['heading-cases']; ?>
				<?php $title = $image['title']; ?>
				<?php $alt = $image['alt']; ?>

				<img class="img-fluid" src="<?php echo $thumb; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>">
			</div>
		</div>
	</div>
</div>