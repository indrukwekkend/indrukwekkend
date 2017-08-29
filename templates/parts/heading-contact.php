<div id="contact" class="row part-contact">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-10">
				<div class="row bg-orange inset">
						<div class="col-12 col-xl-10 align-self-end pt-4">

							<div class="row mb-4 mt-5 align-items-center">
								<div class="col-6 col-xl-8 text-right">
									<h4><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_field('title_left')); ?></h4>
								</div>
								<div class="col-6 col-xl-4 text-left">
									<h5><?php echo preg_replace('~((\w+\s){4})~', '$1' . "<br>", get_field('title_right')); ?></h5>
							</div>
						</div>

						<div class="row text-center justify-content-center my-3">
							<div class="col-1 d-none d-xl-block"></div>

							<?php if( get_field('email') ):?>
								<div class="col-4 p-0">
									<span class="icon mail"></span>
									<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
								</div>
							<?php endif; ?>

							<?php if( get_field('landline') ): ?>
								<div class="col-3 p-0">
									<span class="icon phone"></span>
									<a href="tel:<?php echo str_replace(" ", "", get_field('landline')); ?>"><?php the_field('landline'); ?></a>
								</div>
							<?php endif; ?>

							<?php if( get_field('mobile') ):?>
								<div class="col-3 p-0">
									<span class="icon smartphone"></span>
									<a href="tel:<?php echo str_replace(" ", "", get_field('mobile')); ?>"><?php the_field('mobile'); ?></a>
								</div>
							<?php endif; ?>

						</div>
					</div>

					<div class="col-xl-2 d-none d-xl-block align-self-end text-center p-0">
						<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />
					</div>

				</div>
			</div>
		</div>
	</div>
</div>