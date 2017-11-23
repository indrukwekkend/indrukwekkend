<!-- single cases, primary secondary en tertiary holders. -->
<?php // Page Intro ?>
<?php get_template_part('templates/parts/heading', 'cases'); ?>

<?php // Primary Content ?>
<?php if( have_rows('primary_content') ): ?>
	<div class="primary-content">
		<div class="container pt-6">
			<?php while( have_rows('primary_content') ): the_row(); ?>

					<?php // OLD Section Content ?>
					<?php if( get_row_layout() == 'heading_right' ): ?>
						<?php get_template_part('templates/parts/section', 'content'); ?>

					<?php // Section Content ?>
					<?php elseif( get_row_layout() == 'section_content' ): ?>
						<?php get_template_part('templates/parts/section', 'content'); ?>

					<?php // Section Gallerij ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/section', 'gallery'); ?>

					<?php // Gallerij Rechts ?>
					<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

					<?php // Prieview Rechts ?>
					<?php elseif( get_row_layout() == 'preview_laptop_right' ): ?>
						<?php get_template_part('templates/parts/preview-laptop', 'right'); ?>

					<?php // Preview Links ?>
					<?php elseif( get_row_layout() == 'preview_laptop_left' ): ?>
						<?php get_template_part('templates/parts/preview-laptop', 'left'); ?>

					<?php // Social Media ?>
					<?php elseif( get_row_layout() == 'socialmedia' ): ?>
						<?php get_template_part('templates/parts/social', 'media'); ?>

				<?php endif; ?>
			<?php endwhile; ?>

			<?php get_template_part('templates/parts/content', 'contributors'); ?>

		</div>
	</div>
<?php endif; ?>

<?php // Secondary Content ?>
<?php if( have_rows('secondary_content') ): ?>
	<div class="secondary-content">
		<div class="container pt-5">
			<?php while( have_rows('secondary_content') ): the_row(); ?>

					<?php // Section Content ?>
					<?php if( get_row_layout() == 'heading_right' ): ?>
						<?php get_template_part('templates/parts/section', 'content'); ?>

					<?php // Section Content ?>
					<?php elseif( get_row_layout() == 'section_content' ): ?>
						<?php get_template_part('templates/parts/section', 'content'); ?>

					<?php // Section Gallerij ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/section', 'gallery'); ?>

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

					<?php // Laptop Prieview Rechts ?>
					<?php elseif( get_row_layout() == 'preview_laptop_right' ): ?>
						<?php get_template_part('templates/parts/preview-laptop', 'right'); ?>

					<?php // Gallerij Rechts ?>
					<?php elseif( get_row_layout() == 'preview_laptop_left' ): ?>
						<?php get_template_part('templates/parts/preview-laptop', 'left'); ?>

					<?php // Social Media ?>
					<?php elseif( get_row_layout() == 'socialmedia' ): ?>
						<?php get_template_part('templates/parts/social', 'media'); ?>

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