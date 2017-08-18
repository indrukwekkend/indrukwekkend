<?php if( $post_objects = get_field('teamleden') ): ?>
<div class="row single-teamleden">
<div class="container">
<div class="row">
<div class="col-12">
<div class="row">
<div class="col-xl-7 order-2 order-xl-1">
<div class="row justify-content-end pr-4">
<?php foreach( $post_objects as $post): ?>
<?php setup_postdata($post); ?>
<div class="col-2 single-teamlid align-self-end">
<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>" />
</div>
<?php endforeach; ?>
</div>
</div>
<div class="col-xl-5 order-1 order-xl-2 text-right align-self-end">
<div class="single-title">
<span class="heading"><?php echo preg_replace('~((\w+\s){2})~', '$1'. "<br>", 'Wij werkten ook mee'); ?></span> <span class="line"></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php // Client Quote ?>	
<?php if( $post_object = get_field('client_quote') ): ?>
<div class="row client-quote">
<div class="container-fluid">
<?php $post = $post_object; ?>
<?php setup_postdata($post); ?>
<div class="row single-row">
<div class="col-lg-6 p-0">
<div class="single-quote">
<div class="quote-content">
<?php the_content(); ?>
</div>
<div class="quote-author">
<p><?php the_title(); ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>