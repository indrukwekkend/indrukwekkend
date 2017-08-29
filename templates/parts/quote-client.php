<?php $post_object = get_field('quote_client'); ?>

<?php if( $post_object ): ?>

	<?php $post = $post_object; ?>
	<?php setup_postdata( $post ); ?>

	<div class="row py-5">
		<div class="col-10">
			<div class="row p-5 part-quote-client">
				<div class="col-12">
					<div class="row">
						<?php the_content();?>
					</div>
					<div class="row">
						<div><?php the_title(); ?> <?php the_field('company_position');?></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php wp_reset_postdata();?>

<?php endif; ?>