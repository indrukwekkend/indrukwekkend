<div class="row cases-related">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-3 text-right pr-5">
<span class="related-title"> Bekijk de<br> andere singles
</span>
</div>
<?php if ( $tags = wp_get_post_tags($post->ID) ) : ?>
<?php $tag_ids = array(); ?>
<?php foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id; ?>
<?php
$args = array(
'post_type' => 'singles',
'tag__in' => $tag_ids,
'post__not_in' => array($post->ID),
'posts_per_page' => 3,
'caller_get_posts' => 1
);
?>
<?php $my_query = new wp_query( $args ); ?>
<?php while( $my_query->have_posts() ) : ?>
<?php $my_query->the_post(); ?>
<div class="col-3 related-item">
<div class="related-content">
<div class="related-image">
<img class="img-fluid" src="<?php the_field('header_foreground'); ?>" />
</div>
<div class="related-title">
<?php the_title(); ?>
</div>
</div>
</div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php wp_reset_query(); ?>
<?php endif; ?>
</div>
</div>
</div>