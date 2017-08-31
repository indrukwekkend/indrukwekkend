<?php use Roots\Sage\Extras; ?>
<div class="container">
	<div class="row  align-items-center">
		<div class="col-sm-7">
			<div class="text-center">
				<p class="lead">Met veel trost werken wij o.a. voor deze merken</p>
			</div>
			<div class="row justify-content-center company-brands">
				<?php if( $post_objects = get_field('brands') ): ?>

					<?php foreach( $post_objects as $post): ?>

						<?php setup_postdata($post); ?>

								<div class="col-3">
									<img class="brand img-fluid" src="<?php the_post_thumbnail_url(null, 'medium'); ?>" title="<?php the_title(); ?>"/>
								</div>

						<?php endforeach; ?>

					<?php wp_reset_postdata(); ?>

				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-12 text-center pt-5">
					<a class="btn btn-lg btn-black" href="/cases" >Bekijk ons werk</a>
				</div>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="row pt-6 front-content">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="row pt-6">
				<?php if( $post_objects = get_field('quotes') ): ?>

					<div class="col-12">
						<div class="row p-5 part-quote-client">
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
				<div class="col-8">
					<div class="row">
						<div class="col-6">
							<div class="row">
								<div class="col">
									<span class="spread-the-love">Spread the love</span>
								</div>
							</div>
							<div class="row">
								<div class="col-2"></div>
								<div class="col-10">
									<span class="dit-is-indrukwekkend"><span class="icon instagram-black"></span> @ditisindrukwekkend</span>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="instagram-feed">
								<?php echo do_shortcode('[instagram-feed]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col pt-4">
					<a class="instagram-link" href="https://instagram.com/ditisindrukwekkend">volg ons werk op Instagram<span class="icon arrow-right-orange"></span></a>
				</div>
			</div>

		</div>
	</div>
</div>