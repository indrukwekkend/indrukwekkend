<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/parts/single', 'intro'); ?>

<?php // Content ?>
<?php if( have_rows('content') ): ?>
<div class="row single-content">
<div class="container">
<?php while( have_rows('content') ): the_row(); ?>
<?php if( get_row_layout() == 'team_quote_left' ): ?>
<?php // Quote with autograph?>
<?php get_template_part('templates/parts/quote', 'team-left'); ?>

<?php elseif( get_row_layout() == 'client_quote_left' ): ?>
<?php // Quote of Client + Name, Company/Position ?>
<?php get_template_part('templates/parts/quote', 'left'); ?>

<?php elseif( get_row_layout() == 'image_left' ): ?>
<?php // Title left, Image underneat, text right ?>
<?php get_template_part('templates/parts/image', 'left'); ?>

<?php elseif(get_row_layout() == 'image_right' ): ?>		
<?php // Title right, Image underneat, text left ?>
<?php get_template_part('templates/parts/image', 'right'); ?>

<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
<?php get_template_part('templates/parts/image', 'fullwidth'); ?>
<?php endif; ?>
<?php endwhile; ?>
<?php // Teamleden ?>
<?php get_template_part('templates/cases/cases', 'teamleden'); ?>
</div>
</div>
<?php endif; ?>

<?php // Client Quote ?>	
<?php get_template_part('templates/cases/cases', 'client-quote'); ?>

<?php // Cases Quote ?>
<?php get_template_part('templates/cases/cases', 'manager-quote'); ?>

<?php // Related singles ?>
<?php get_template_part('templates/cases/cases', 'related'); ?>
<?php endwhile; ?>