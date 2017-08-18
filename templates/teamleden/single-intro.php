<div class="row single-intro">
<div class="container pt-5 px-5">
<div class="row justify-content-center">
<div class="col-8">
<div class="single-description">
<?php the_content(); ?>
<?php if( $autograph = get_field('autograph') ): ?>
<img width="350" src="<?php echo get_stylesheet_directory_uri()."/dist/images/autographs/".$autograph; ?>" />
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>