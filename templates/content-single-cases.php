<!-- single cases, primary secondary en tertiary holders. -->

<?php // Page Intro ?>
<?php get_template_part('templates/parts/heading', 'cases'); ?>

<?php // Primary Content ?>
<?php if( have_rows('primary_content') ): ?>
	<div class="primary-content">
		<div class="container pt-6">
			<?php while( have_rows('primary_content') ): the_row(); ?>

					<?php // Title left ?>
					<?php if( get_row_layout() == 'content_left' ): ?>
						<?php get_template_part('templates/parts/content', 'left'); ?>

					<?php // Title right ?>
					<?php elseif( get_row_layout() == 'content_right' ): ?>
						<?php get_template_part('templates/parts/content', 'right'); ?>

					<?php // Title + Image left ?>
					<?php elseif( get_row_layout() == 'heading_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'left'); ?>

					<?php // Title + Image right ?>
					<?php elseif( get_row_layout() == 'heading_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'right'); ?>

					<?php // Title + Teskt row ?>
					<?php elseif( get_row_layout() == 'heading_full_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'full-left'); ?>

					<?php // Title + Teskt row ?>
					<?php elseif( get_row_layout() == 'heading_full_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'full-right'); ?>

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

					<?php // Gallerij Rechts ?>
					<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

					<?php // Social Media ?>
					<?php elseif( get_row_layout() == 'socialmedia' ): ?>
						<?php get_template_part('templates/parts/social', 'media'); ?>

					<?php // Fullwidth image?>
					<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
						<?php get_template_part('templates/parts/image', 'fullwidth'); ?>

				<?php // Quote with autograph?>
				<?php elseif( get_row_layout() == 'quote_left' ): ?>
					<?php get_template_part('templates/parts/quote', 'left'); ?>

				<?php // Quote with autograph?>
				<?php elseif( get_row_layout() == 'quote_right' ): ?>
					<?php get_template_part('templates/parts/quote', 'right'); ?>


				<?php endif; ?>
			<?php endwhile; ?>

			<?php // 'Wij werkten ook mee' ?>
			<?php get_template_part('templates/parts/content', 'contributors'); ?>

		</div>
	</div>
<?php endif; ?>


<?php // Secondary Content ?>
<?php if( have_rows('secondary_content') ): ?>
	<div class="secondary-content">
		<div class="container pt-5">
			<?php while( have_rows('secondary_content') ): the_row(); ?>

					<?php // Title left ?>
					<?php if( get_row_layout() == 'content_left' ): ?>
						<?php get_template_part('templates/parts/content', 'left'); ?>

					<?php // Title right ?>
					<?php elseif( get_row_layout() == 'content_right' ): ?>
						<?php get_template_part('templates/parts/content', 'right'); ?>

					<?php // Title + Image left ?>
					<?php elseif( get_row_layout() == 'heading_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'left'); ?>

					<?php // Title + Image right ?>
					<?php elseif( get_row_layout() == 'heading_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'right'); ?>

					<?php // Title + Teskt row ?>
					<?php elseif( get_row_layout() == 'heading_full_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'full-left'); ?>

					<?php // Title + Teskt row ?>
					<?php elseif( get_row_layout() == 'heading_full_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'full-right'); ?>

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

					<?php // Gallerij Rechts ?>
					<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

					<?php // Social Media ?>
					<?php elseif( get_row_layout() == 'socialmedia' ): ?>
						<?php get_template_part('templates/parts/social', 'media'); ?>

					<?php // Fullwidth image?>
					<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
						<?php get_template_part('templates/parts/image', 'fullwidth'); ?>

				<?php endif; ?>
			<?php endwhile; ?>

		</div>
	</div>
<?php endif; ?>

<?php // Tertiary Content ?>
<div class="tertiary-content">
	<div class="container">

		<?php // Client Quote ?>
		<?php get_template_part('templates/parts/quote', 'client'); ?>

		<?php // Manager Quote ?>
		<?php get_template_part('templates/parts/quote', 'manager'); ?>

		<?php // Related Cases ?>
		<?php get_template_part('templates/parts/content', 'cases'); ?>

	</div>
</div>