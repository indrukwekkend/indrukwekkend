<?php if( $post_object = get_field('client_quote') ): ?>
<div class="row client-quote">
<div class="container-fluid">
<?php $post = $post_object; ?>
<?php setup_postdata($post); ?>
<div class="row cases-row">
<div class="col-lg-6 p-0">
<div class="client-quote">
<div class="client-quote-content">
<?php the_content(); ?>
</div>
<div class="client-quote-author">
<p><?php the_title(); ?></p>
</div>
</div>
</div>
</div>
</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>