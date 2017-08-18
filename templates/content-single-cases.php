<?php while (have_posts()) : the_post(); ?>
<div class="row single-intro">
<div class="container p-5">
<div class="row">
<div class="col text-center">
<div class="singles-title">
<span class="text-brand">single:</span> <?php the_title(); ?>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-8">
<div class="single-description">
<?php the_content(); ?>
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
</div>
</div>
<?php endif; ?>
<?php // Teamleden ?>
<?php get_template_part('templates/cases/cases', 'teamleden'); ?>

<?php // Cases Quote ?>
<?php get_template_part('templates/cases/cases', 'quote'); ?>

<?php // Related singles ?>
<?php get_template_part('templates/cases/cases', 'related'); ?>
<?php endwhile; ?>