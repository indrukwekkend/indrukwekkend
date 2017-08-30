<?php use Roots\Sage\Extras; ?>
<div class="container mb-5">
	<div class="row  align-items-center">
		<div class="col-sm-7">
			<div class="text-center">
				<p class="lead">Met veel trost werken wij o.a. voor deze merken</p>
			</div>
			<div class="row justify-content-center">
				<?php if( $post_objects = get_field('brands') ): ?>

					<?php foreach( $post_objects as $post): ?>

						<?php setup_postdata($post); ?>

								<div class="col-3">
									<img class="img-fluid" src="<?php the_post_thumbnail_url(null, 'medium'); ?>" title="<?php the_title(); ?>"/>
								</div>

						<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-12 text-center pt-5">
					<a class="btn btn-lg btn-black" href="">Bekijk ons werk</a>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="row pt-5 front-content">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="row pt-6">
				<?php if( $post_objects = get_field('quotes') ): ?>

					<?php foreach( $post_objects as $post): ?>

						<?php setup_postdata($post); ?>

						<div class="col-12">
							<div class="row p-5 part-quote-client">
								<div class="col-12">
									<div class="row">
										<?php the_content();?>
									</div>
									<div class="row">
										<div class="col-12">
											<span class="text-gray"><?php the_title(); ?> - <?php the_field('company_position');?></span>
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="instagram-container">
			<div class="instagram-description">
				<div class="instagram-text">Spread the love</div>
				<div class="instagram-username">
					<span class="fa fa-instagram"></span>@ditisindrukwekkend
				</div>
			</div>
			<div class="instagram-feed">
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</div>
		<div class="row text-center">
			<div class="col mb-3">
				<div class="instagram-link">
					<a href="https://instagram.com/ditisindrukwekkend">volg ons werk op Instagram</a> <span class="icon-arrow-right"></span>
				</div>
			</div>
		</div>
	</div>
</div>