

<?php // Page Intro ?>
<?php get_template_part('templates/parts/heading', 'page'); ?>

<?php // Primary Content ?>
<?php if( have_rows('primary_content') ): ?>
	<div class="primary-content">
		<div class="container pt-6">
			<?php while( have_rows('primary_content') ): the_row(); ?>

					<?php // Section Content ?>
					<?php if( get_row_layout() == 'section_content' ): ?>
						<?php get_template_part('templates/parts/section', 'content'); ?>

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

					<?php // Gallerij Rechts ?>
					<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

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

					<?php // Gallerij Links ?>
					<?php elseif( get_row_layout() == 'heading_gallery_left' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-left'); ?>

					<?php // Gallerij Rechts ?>
					<?php elseif( get_row_layout() == 'heading_gallery_right' ): ?>
						<?php get_template_part('templates/parts/heading', 'gallery-right'); ?>

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

		<?php // Contact ?>
		<?php get_template_part('templates/parts/about', 'contact'); ?>

		<?php // Cases ?>
		<?php get_template_part('templates/parts/content', 'coworkers'); ?>

	</div>
</div>