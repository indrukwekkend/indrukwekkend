<div class="row single-row">
<div class="col-lg-6">
<div class="single-quote p-4">
<div class="quote-content">		
<?php the_sub_field('content')?>		
</div>
<div class="quote-autograph">
<?php if( $post_object = get_sub_field('author') ): ?>
<?php $post = $post_object; ?>
<?php setup_postdata($post); ?>
<?php if( $autograph = get_field('autograph') ): ?>
<img class="mt-3" width="120" src="<?php echo get_stylesheet_directory_uri()."/dist/images/autographs/".$autograph; ?>" />
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
</div>
</div>
</div>