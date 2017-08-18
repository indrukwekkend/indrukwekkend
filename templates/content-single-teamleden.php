<?php while (have_posts()) : the_post(); ?>
<div class="row single-intro">
	<div class="container pt-5 px-5">
		<div class="row justify-content-center">
			<div class="col-8">
				<div class="single-description">
					<?php the_content(); ?>
					<?php if( $autograph = get_field('autograph') ): ?>
						<img width="350" src="<?php echo get_stylesheet_directory_uri()."/dist/images/autographs/".$autograph; ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row teamleden-contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-10">
				<div class="row bg-orange inset">
					<div class="col-2"></div>
					<div class="col-8 align-self-end">
						<?php $contact = get_field('contact_block'); ?>
						<?php if( $contact ):?>
    						<div class="row mb-4">
							<div class="col text-right">
    									<?php echo $contact['text_left']; ?>
    							</div>
							<div class="col text-left">
    									<?php echo $contact['text_right']; ?>
    							</div>
						</div>
						<?php endif;?>
						<div class="row text-center my-2">
							<?php if( get_field('email') ):?>
								<div class="col p-0">
								<div class="single-icon email"></div>
								<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
							</div>
							<?php endif; ?>
							<?php if( get_field('landline') ): ?>
								<div class="col p-0">
								<div class="single-icon phone"></div>
								<span><?php the_field('landline'); ?></span>
							</div>
							<?php endif; ?>
							<?php if( get_field('mobile') ):?>
								<div class="col p-0">
								<div class="single-icon mobile"></div>
								<span><?php the_field('mobile'); ?></span>
							</div>
							<?php endif; ?>
							<?php if( get_field('strava') ):?>
								<div class="col p-0">
								<div class="single-icon strava"></div>
								<span><?php the_field('strava'); ?></span>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-2 align-self-end text-center p-0">
						<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php // Content ?>
<?php if( have_rows('content') ): ?>
	<div class="row single-content">
		<div class="container">
			<?php while( have_rows('content') ): the_row(); ?>
				<?php if( get_row_layout() == 'team_quote_left' ): ?>		
					<div class="row single-row">
						<div class="col-lg-6">
							<div class="single-quote p-4">
								<div class="quote-content">
									<?php the_sub_field('content')?>
								</div>
								<div class="quote-autograph">
									<?php if( $post_object = get_sub_field('author') ): ?>
										<?php $post = $post_object; ?>
										<?php setup_postdata($post); ?>
										<?php if( $autograph = get_field('autograph') ): ?>
											<img class="mt-3" width="120" src="<?php echo get_stylesheet_directory_uri()."/dist/images/autographs/".$autograph; ?>" />
										<?php endif; ?>
										<?php wp_reset_postdata(); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'client_quote_left' ): ?>
					<div class="row single-row">
						<div class="col-lg-6">
							<div class="single-quote p-4">
								<div class="quote-content">
									<?php the_sub_field('content')?>
								</div>
								<div class="quote-autograph">
									<img src="<?php the_sub_field('author')?>" />
								</div>
							</div>
						</div>
					</div>
				<?php elseif( get_row_layout() == 'image_left' ): ?>
<div class="row justify-content-center single-row">
<div class="col-10">
<div class="row">
<div class="col-lg-6">
<div class="single-title">
<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 mt-5">
<div class="single-image-left text-center">
<img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
</div>
</div>
<div class="col-lg-6">
<div class="single-content-left ">
<?php the_sub_field('content'); ?>
</div>
</div>
</div>
</div>
</div>
<?php elseif(get_row_layout() == 'image_right' ): ?>		
<div class="row justify-content-center single-row">
<div class="col-10">
<div class="row">
<div class="col-lg-6"></div>
<div class="col-lg-6 text-right">
<div class="single-title">
<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 mt-5 mt-lg-0">
<div class="single-content-right">
<?php the_sub_field('content'); ?>
</div>
</div>
<div class="col-lg-6 mt-5">
<div class="single-image-right text-center">
<img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
</div>
</div>
</div>
</div>
</div>
<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
<div class="row justify-content-center single-row">
<div class="col-10">
<div class="row">
<div class="col-lg-6">
<div class="single-title">
<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 mt-5"></div>
<div class="col-lg-6">
<div class="single-content-left">
<?php the_sub_field('content'); ?>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="single-image-fullwidth pt-5">
<img class="img-fluid" src="<?php the_sub_field('image'); ?>" />
</div>
</div>
</div>
</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
</div>
</div>
<?php endif; ?>
<?php endwhile; ?>