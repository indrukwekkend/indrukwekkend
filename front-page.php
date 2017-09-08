<?php use Roots\Sage\Extras; ?>
<div class="container">
	<div class="row  align-items-center">
		<div class="col-12 py-5 d-block d-xl-none">
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<div class="col-12 col-md-6 col-xl-7">
			<div class="text-center">
				<p class="lead">Met veel trost werken wij o.a. voor deze merken</p>
			</div>
			<div class="row justify-content-center company-brands">
				<?php if( $post_objects = get_field('brands') ): ?>

					<?php foreach( $post_objects as $post): ?>

						<?php setup_postdata($post); ?>

								<div class="col-4 col-xl-3 mb-4 text-center">
									<img class="img-fluid brand" src="<?php the_post_thumbnail_url(null, 'brand-size'); ?>" title="<?php the_title(); ?>"/>
								</div>

						<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-12 text-center pt-2">
					<a class="btn btn-lg btn-black" href="#cases" >Bekijk ons werk</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-xl-5">
			<div class="row pt-xl-6 front-content">
				<div class="col-12 d-none d-xl-block">
					<?php while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="row pt-5 pt-xl-6">
				<?php if( $post_objects = get_field('quotes') ): ?>

					<div class="col-12">
						<div class="row px-0 px-sm-4 py-5 p-md-5 part-quote-client">
							<div class="col-12 quote-list">
								<?php foreach( $post_objects as $post): ?>

									<?php setup_postdata($post); ?>

									<div class="col-12 mb-4">
										<div class="row">
											<div class="col-12">
												<?php the_content();?>
											</div>
										</div>
										<div class="row">
											<div class="col-12">
											<span class="text-gray"><?php the_title(); ?> - <?php the_field('company_position');?></span>
											</div>
										</div>
									</div>

								<?php endforeach; ?>
							</div>
						</div>
					</div>


					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col py-6 part-instagram">

			<div class="row">
				<div class="col-12 col-xl-8">
					<div class="row text-center text-xl-left">
						<div class="col-12 col-md-6">
							<div class="row">
								<div class="col">
									<span class="spread-the-love">Spread the love</span>
								</div>
							</div>
							<div class="row">
								<div class="col-12 col-md-2"></div>
								<div class="col-12 col-md-10">
									<span class="dit-is-indrukwekkend"><span class="icon instagram-black"></span> <?php the_field('instagram_label', 'option'); ?></span>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6">
							<div class="instagram-feed">
								<?php echo do_shortcode('[instagram-feed]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col pt-4">
					<a class="instagram-link" href="<?php the_field('instagram_link', 'option'); ?>">volg ons werk op Instagram<span class="icon arrow-right-orange"></span></a>
				</div>
			</div>

		</div>
	</div>
</div>