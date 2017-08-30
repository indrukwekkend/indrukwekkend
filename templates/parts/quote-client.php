<?php $post_object = get_field('quote_client'); ?>

<?php if( $post_object ): ?>

	<?php $post = $post_object; ?>
	<?php setup_postdata( $post ); ?>

	<div class="row pt-6">
		<div class="col-10">
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
	</div>

	<?php wp_reset_postdata();?>

<?php endif; ?>