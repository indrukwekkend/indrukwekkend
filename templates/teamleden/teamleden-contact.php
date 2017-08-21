<div id="contact" class="row teamleden-contact">
<div class="container">
<div class="row justify-content-center">
<div class="col-10">
<div class="row bg-orange inset">
<div class="col-2"></div>
<div class="col-8 align-self-end">
<?php $contact = get_field('contact_block'); ?>
<?php if( $contact ):?>
<div class="row mb-4">
<div class="col text-right">
<?php echo $contact['text_left']; ?>
</div>
<div class="col text-left">
<?php echo $contact['text_right']; ?>
</div>
</div>
<?php endif;?>
<div class="row text-center my-3">
<?php if( get_field('email') ):?>
<div class="col p-0">
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
<div class="col-2 align-self-end text-center p-0">
<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />
</div>
</div>
</div>
</div>
</div>
</div>