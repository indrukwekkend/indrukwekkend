<!-- heading-cases -->
<?php $image = get_field('featured_image'); ?>
<?php $title = $image['title']; ?>
<?php $alt = $image['alt']; ?>
<?php $reverser = ( get_field( 'afbeelding_links' ) ? 'flex-row-reverse text-right' : ''); ?>
<div id="intro" class="page-header">
	<div class="container pt-6 pb-5">
		<div class="row justify-content-center">
			<div class="col-12 text-center">
				<h1 class="mb-5"><span class="text-orange">Case:</span> <?php the_title(); ?></h1>
			</div>
		</div>
		<?php if (!get_field( 'afbeelding_naast_tekst')): ?>		
		<div class="row justify-content-center">
			<div class="col-12 col-md-8">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row justify-content-center">

			<div class="col-12 col-md-8 text-center">				
				<?php $thumb = $image['sizes']['heading-cases']; ?>

				<img class="img-fluid" src="<?php echo $thumb; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>">
			</div>
		</div>
		<?php else: ?>
		<div class="row justify-content-center ">
			<div class="col-12 col-md-11 col-lg-10">
				<div class="row <?= $reverser?>">					
					<div class="col-md-6">
						<?php the_content(); ?>
					</div>					
					<div class="col-md-6">
						<?php $thumb = $image['sizes']['heading-image']; ?>
						<img class="img-fluid" src="<?php echo $thumb; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>">
					</div>
				</div>
			</div>
		</div>
<?php endif; ?>		
	</div>
</div>