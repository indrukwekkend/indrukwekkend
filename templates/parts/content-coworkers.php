<?php

$coworkers_title = (is_page_template('template-about.php')) ? "Maak kennis met het team" : "Ontmoet de rest<br> van het team" ;

?>

<div class="row align-items-center part-coworkers">

	<div class="col-12 col-lg-3 py-3 py-md-0 text-xl-right pr-5">
		<span class="coworkers-title">
			<h5 class="d-none d-lg-block"><?= $coworkers_title; ?></h5>
			<h4 class="d-block d-lg-none"><?= $coworkers_title; ?></h4>
		</span>
	</div>
	
	<div class="col-12 col-lg-9 p-0">
		<?php $args = array('post_type' => 'teamleden', 'post__not_in' => array($post->ID), ); ?>
		<?php $query = new wp_query( $args ); ?>

		<?php if($query->have_posts()): ?>
			<div class="coworkers-list">
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
						<div class="col coworkers-item">
							<div class="coworkers-content">
								<div class="coworkers-image" style="background-image:url(<?php the_post_thumbnail_url();?>);"></div>
								<div class="coworkers-title">
									<h4><?php the_title(); ?></h4>
								</div>
								<div class="coworkers-hover">
									<a class="click-area" href="<?php echo esc_url( get_post_permalink() ); ?>"></a>
									<div class="coworkers-info">
										<h4><span><?php the_title(); ?></span></h4>
										<span class="d-none d-sm-inline"><?php the_field('company_position'); ?></span>
									</div>
									<div class="coworkers-contact">

										<?php if(get_field('mobile')):?>
										<div class="coworkers-phone">
											<div class="mb-2 px-4">
												<span class="icon smartphone d-none d-sm-inline-block"></span>
												<a class="ml-2 text-white" href="tel:<?php the_field('mobile'); ?>"><?php the_field('mobile'); ?></a>
											</div>
										</div>
										<?php endif; ?>

										<?php if(get_field('mobile')):?>
										<div class="coworkers-email">
											<div class="mb-2 px-4">
												<span class="icon mail d-none d-sm-inline-block"></span>
												<a class="ml-2 text-white" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
											</div>
										</div>
										<?php endif; ?>

									</div>
								</div>
							</div>
						</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php wp_reset_query(); ?>
			</div>
		<?php endif; ?>
	</div>
</div>