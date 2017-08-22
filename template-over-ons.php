<?php
/**
 * Template Name: Over Ons Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>

	<?php // Content ?>
	<?php if( have_rows('content') ): ?>
		<div class="row single-content">
			<div class="container">
				<?php while( have_rows('content') ): the_row(); ?>


					<?php // Quote with autograph?>
					<?php if( get_row_layout() == 'team_quote_left' ): ?>
						<?php get_template_part('templates/parts/quote', 'team-left'); ?>

						<?php // Quote of Client + Name, Company/Position ?>
						<?php elseif( get_row_layout() == 'client_quote_left' ): ?>
							<?php get_template_part('templates/parts/quote', 'left'); ?>

						<?php // Title left, Image underneat Title, text right ?>
						<?php elseif( get_row_layout() == 'image_left' ): ?>
							<?php get_template_part('templates/parts/image', 'left'); ?>

						<?php // Title right, Image underneat Title, text left ?>
						<?php elseif(get_row_layout() == 'image_right' ): ?>		
							<?php get_template_part('templates/parts/image', 'right'); ?>

						<?php // Fullwidth image?>
						<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
							<?php get_template_part('templates/parts/image', 'fullwidth'); ?>

						<?php elseif(get_row_layout() == 'image_multi' ): ?>
							<?php // Span image over container ?>
							<?php get_template_part('templates/parts/image', 'multi'); ?>

					<?php endif; ?>
				<?php endwhile; ?>

			</div>
		</div>
	<?php endif; ?>

	<?php // Andere teamleden ?>
	<?php get_template_part('templates/teamleden/teamleden', 'teamleden'); ?>

<?php endwhile; ?>  