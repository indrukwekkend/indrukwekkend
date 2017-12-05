<!-- single teamleden, primary secondary en tertiary holders. -->
<?php // Page Intro ?>
<?php get_template_part('templates/parts/heading', 'page'); ?>

<?php // Contact ?>
<?php get_template_part('templates/parts/heading', 'contact'); ?>

<?php // Primary Content ?>
<?php if( have_rows('primary_content') ): ?>
	<div class="primary-content">
		<div class="container py-5 content-holder">
			<?php while( have_rows('primary_content') ): the_row(); ?>

				<?php // Section Content ?>
				<?php if( get_row_layout() == 'section_content' ): ?>
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


<?php // Secondary Content ?>
<?php if( have_rows('secondary_content') ): ?>
	<div class="secondary-content">
		<div class="container pt-6">
			<?php while( have_rows('secondary_content') ): the_row(); ?>

				<?php // Section Content ?>
				<?php if( get_row_layout() == 'section_content' ): ?>
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

		<?php // Cases ?>
		<?php get_template_part('templates/parts/employee', 'cases'); ?>

		<?php // Coworkers ?>
		<?php get_template_part('templates/parts/content', 'coworkers'); ?>

	</div>
</div>