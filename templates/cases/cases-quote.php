<?php if( have_rows('single_quote') ): ?>
<div class="row team-quote">
<div class="container">
<?php while( have_rows('single_quote') ): the_row(); ?>
<?php if( $post_object = get_sub_field('teamlid') ): ?>
<?php $post = $post_object; ?>
<?php setup_postdata($post); ?>
<div class="row justify-content-center">
<div class="col-10">
<div class="row team-quote-bg">
<div class="col-8 p-5">
<div class="row team-quote-content">
<div style="font-size:<?php the_sub_field('fontsize'); ?>px"><?php the_sub_field('content'); ?></div>
</div>
<div class="row">
<div class="py-3">Neem contact op met <?php the_title(); ?></div>
</div>
<div class="row">
<?php if( get_field('email') ):?>
<div class="col-5 p-0">
<div class="single-icon email"></div>
<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
</div>
<?php endif; ?>
<?php if( get_field('landline') ): ?>
<div class="col p-0">
<div class="single-icon phone"></div>
<span><?php the_field('landline'); ?></span>
</div>
<?php endif; ?>
<?php if( get_field('mobile') ):?>
<div class="col p-0">
<div class="single-icon mobile"></div>
<span><?php the_field('mobile'); ?></span>
</div>
<?php endif; ?>
<?php if( get_field('strava') ):?>
<div class="col p-0">
<div class="single-icon strava"></div>
<span><?php the_field('strava'); ?></span>
</div>
<?php endif; ?>
</div>
</div>
<div class="col-4 align-self-end text-center">
<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />
</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
</div>
<?php endwhile; ?>
</div>
</div>
<?php endif; ?>