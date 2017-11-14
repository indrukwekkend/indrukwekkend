<?php $post_object = get_field('quote_client'); ?>

<?php if( $post_object ): ?>

	<?php $post = $post_object; ?>
	<?php setup_postdata( $post ); ?>

	<div class="row pt-6 part-quote-client">

		<div class="col-12 col-xl-8">

			<div class="row p-5 quote-client-container">

				<div class="col-12">

					<div class="row">
						<div class="col-12">
							<?php the_content();?>
						</div>
					</div>

				</div>

			</div>

		</div>

		<div class="col-12 col-xl-4 text-right">

			<div class="heading">

				<h4 class="title">
					<span><?php the_field('quote_title'); ?></span>
				</h4>

				<span class="line"></span>

			</div>

		</div>

	</div>

	<?php wp_reset_postdata();?>

<?php endif; ?>