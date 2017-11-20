

<?php // Page Intro ?>
<?php get_template_part('templates/parts/heading', 'page'); ?>

<?php // Primary Content ?>
<?php if( have_rows('primary_content') ): ?>
	<div class="row primary-content">
		<div class="container">
			<?php while( have_rows('primary_content') ): the_row(); ?>

				<?php // Section Content ?>
				<?php if( get_row_layout() == 'heading_right' ): ?>
					<?php get_template_part('templates/parts/section', 'content'); ?>

				<?php // Gallerij Links ?>
				<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
					<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

				<?php // Gallerij Rechts ?>
				<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
					<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

				<?php // Laptop Prieview Rechts ?>
				<?php elseif( get_row_layout() == 'preview_laptop_right' ): ?>
					<?php get_template_part('templates/parts/preview-laptop', 'right'); ?>

				<?php // Gallerij Rechts ?>
				<?php elseif( get_row_layout() == 'preview_laptop_left' ): ?>
					<?php get_template_part('templates/parts/preview-laptop', 'left'); ?>

				<?php endif; ?>
			<?php endwhile; ?>

		</div>
	</div>
<?php endif; ?>


<?php // Secondary Content ?>
<?php if( have_rows('secondary_content') ): ?>
	<div class="row secondary-content">
		<div class="container">
			<?php while( have_rows('secondary_content') ): the_row(); ?>

				<?php // Section Content ?>
				<?php if( get_row_layout() == 'heading_right' ): ?>
					<?php get_template_part('templates/parts/section', 'content'); ?>

				<?php // Gallerij Links ?>
				<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
					<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

				<?php // Gallerij Rechts ?>
				<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
					<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

				<?php // Laptop Prieview Rechts ?>
				<?php elseif( get_row_layout() == 'preview_laptop_right' ): ?>
					<?php get_template_part('templates/parts/preview-laptop', 'right'); ?>

				<?php // Gallerij Rechts ?>
				<?php elseif( get_row_layout() == 'preview_laptop_left' ): ?>
					<?php get_template_part('templates/parts/preview-laptop', 'left'); ?>

				<?php endif; ?>
			<?php endwhile; ?>

		</div>
	</div>
<?php endif; ?>