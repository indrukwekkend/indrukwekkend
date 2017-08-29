<div class="row py-5">
	<div class="col-2"></div>
		<div class="col-10">

			<div class="row p-5 part-quote-manager">
				<div class="col-8">

					<div class="row">
						<?php the_field('quote_manager');?>
					</div>

					<div class="row">
						<?php $post_object = get_field('manager'); ?>

							<?php if( $post_object ): ?>

								<?php $post = $post_object; ?>
								<?php setup_postdata( $post ); ?>

									<div>Neem contact op met <?php the_title(); ?></div>
								</div>

							<div class="row">

								<div class="col">
									<span class="icon mail"></span>
									<a class="text-white" href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a>
								</div>

								<div class="col">
									<span class="icon phone"></span>
									<a class="text-white" href="tel:<?php the_field('landline');?>"><?php the_field('landline');?></a>
								</div>

								<div class="col">
									<span class="icon smartphone"></span>
									<a class="text-white" href="tel:<?php the_field('mobile');?>"><?php the_field('mobile');?></a>
								</div>

							</div>

						<?php wp_reset_postdata();?>
					<?php endif; ?>

				</div>

				<div class="col-4">
					<?php $post_object = get_field('manager'); ?>

					<?php if( $post_object ): ?>

						<?php $post = $post_object; ?>
						<?php setup_postdata( $post ); ?>

							<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />

						<?php wp_reset_postdata();?>

					<?php endif; ?>

				</div>
			</div>

		</div>
	</div>