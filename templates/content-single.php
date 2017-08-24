

	<?php get_template_part('templates/parts/page', 'intro'); ?>

	<?php // Content ?>
	<?php if( have_rows('content') ): ?>
		<div class="row page-content">
			<div class="container">
				<?php while( have_rows('content') ): the_row(); ?>


					<?php // Quote with autograph?>
					<?php if( get_row_layout() == 'team_quote_left' ): ?>
						<?php get_template_part('templates/parts/quote', 'team-left'); ?>

					<?php // Quote with autograph?>
					<?php if( get_row_layout() == 'team_quote_right' ): ?>
						<?php get_template_part('templates/parts/quote', 'team-right'); ?>

						<?php // Quote of Client + Name, Company/Position ?>
						<?php elseif( get_row_layout() == 'client_quote_left' ): ?>
							<?php get_template_part('templates/parts/quote', 'left'); ?>

						<?php // Quote of Client + Name, Company/Position ?>
						<?php elseif( get_row_layout() == 'client_quote_right' ): ?>
							<?php get_template_part('templates/parts/quote', 'right'); ?>

						<?php // Title left, Image underneat Title, text right ?>
						<?php elseif( get_row_layout() == 'title_left' ): ?>
							<?php get_template_part('templates/parts/image', 'left'); ?>

						<?php // Title right, Image underneat Title, text left ?>
						<?php elseif(get_row_layout() == 'title_right' ): ?>		
							<?php get_template_part('templates/parts/image', 'right'); ?>

						<?php // Fullwidth image ?>
						<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
							<?php get_template_part('templates/parts/image', 'fullwidth'); ?>

					<?php endif; ?>
				<?php endwhile; ?>

			</div>
		</div>
	<?php endif; ?>

