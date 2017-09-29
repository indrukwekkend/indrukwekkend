<div id="contact" class="part-contact">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-12 col-md-11 col-xl-10">
				<div class="row bg-orange inset">
						<div class="col-8 col-md-9 col-xl-10 align-self-end pt-4">

							<div class="row mb-4 mt-xl-5 align-items-center">
								<div class="col-12 col-lg-7 text-lg-right border-right">
									<h4><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_field('title_left')); ?></h4>
								</div>
								<div class="col-12 col-lg-5 text-left">
									<h5><?php echo preg_replace('~((\w+\s){4})~', '$1' . "<br>", get_field('title_right')); ?></h5>
							</div>
						</div>

						<div class="row justify-content-end">
							<div class="col-12 col-xl-10 mb-3 mb-md-4 mb-lg-4 mt-xl-4 p-xl-0">
								<div class="row text-lg-center">
									<?php if( get_field('email') ): ?>
										<div class="col-12 col-md-12 col-lg-6 mb-3">
											<span class="icon mail mr-3 mr-sm-0"></span>
											<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
										</div>
									<?php endif; ?>
		
									<?php if( get_field('landline') ): ?>
										<div class="col-12 col-md-6 col-lg-3 mb-3 p-lg-0">
											<span class="icon phone mr-3 mr-sm-0"></span>
											<a href="tel:<?php echo str_replace(" ", "", get_field('landline')); ?>"><?php the_field('landline'); ?></a>
										</div>
									<?php endif; ?>
		
									<?php if( get_field('mobile') ): ?>
										<div class="col-12 col-md-6 col-lg-3 mb-3 p-lg-0">
											<span class="icon smartphone mr-3 mr-sm-0"></span>
											<a href="tel:<?php echo str_replace(" ", "", get_field('mobile')); ?>"><?php the_field('mobile'); ?></a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-4 col-md-3 col-xl-2 align-self-end text-center p-0">
						<a href="<?php echo get_post_permalink(); ?>">
							<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"/>
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>