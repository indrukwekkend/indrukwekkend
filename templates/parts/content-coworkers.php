<div class="row">
	<div class="col-10">
		<div class="row part-contributors">
			<div class="col-lg-7">

				<?php $args = array(
					'post_type' => 'teamleden',
					'meta_query' => array(
						'relation' => 'OR',
							array(
								'key' => 'cases',
								'value' => get_the_ID(),
								'compare' => 'LIKE'
							)
						),
					); ?>
				<?php $query = new wp_query( $args ); ?>

				<?php if($query->have_posts()): ?>
					<div class="row justify-content-end">
					<?php while( $query->have_posts() ) : ?>
						<?php $query->the_post(); ?>

						<div class="col contributor">
							<img class="img-fluid" src="<?php the_post_thumbnail_url('medium');?>" title="<?php the_title();?>"/>
							
							<div class="contributor-title"><?php the_title();?></div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="col-lg-5 text-right">

				<div class="heading">
					<h4 class="title">
						<span>Wij werkten <br>ook mee</span>
					</h4>
					<span class="line"></span>
				</div>

			</div>
		</div>
	</div>
</div>