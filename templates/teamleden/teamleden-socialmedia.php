<div class="row single-content">
<div class="container">
<div class="row align-items-center teamleden-socialmedia">
<div class="col-2 socialmedia-title">
<?php the_field('social_media_text');?>
</div>
<div class="col-8">
<div class="row">
<?php if( have_rows('social_media') ): ?>
<?php while ( have_rows('social_media') ) : the_row(); ?>
<div class="col">
<span class="single-icon small <?php the_sub_field('service'); ?>"></span>
<a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('username'); ?></a>
</div>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
<div class="col-2">
<a class="btn btn-primary" href="mailto:<?php the_field('email');?>"><?php the_field('email'); ?> <span class="arrow-icon up"></span></a>
</div>
</div>
</div>
</div>