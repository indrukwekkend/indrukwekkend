<?php
/**
 * Template Name: Cases Template
 */
use Roots\Sage\Extras;
$args = array(
	'post_type' => 'cases'
);
$query = new wp_query( $args );
?>

<?php if($query->have_posts()): ?>
	<div class="row">
		<div class="container">
			<div class="row my-6">
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
					<div class="col-3 mb-5">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title"><?php the_title(); ?></h4>
								<p class="card-text"><small class="text-muted">Geplaatst op: <?php the_time('F j, Y'); ?></small></p>
								<p class="card-text"><?php the_excerpt(); ?></p>
								<a href="<?php echo get_permalink();?>" class="btn btn-primary btn-arrow arrow-right">Bekijk deze case</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>