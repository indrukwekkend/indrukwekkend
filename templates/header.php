<?php
$background = function ( $url ) {
    $url = ($url) ? $url : get_stylesheet_directory_uri() . "/dist/images/header_default.png";
    echo 'style="background-image: url(' . esc_url( $url ) . ');"';
};
?>
<div id="overlay-teamleden" class="hidden">
	<div class="container">
		<div class="row">
			
		</div>
	</div>
</div>
<div id="overlay-cases" class="hidden">
	<div class="container-fluid">
		<div class="row">
		<?php $args = array('post_type' => 'cases', 'post__not_in' => array($post->ID), ); ?>
			<?php $query = new wp_query( $args ); ?>
			<?php if($query->have_posts()): ?>
				<?php while( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
						<div class="col-3 overlay-case">
							<a class="overlay-case-content" href="<?php echo esc_url( get_post_permalink() ); ?>">
								<div class="overlay-case-image" style="background-image:url(<?php the_field('header_foreground');?>);"></div>
								<div class="overlay-case-title">
									<h4><?php the_title(); ?></h4>
								</div>
								<div class="overlay-case-hover"></div>
							</a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php wp_reset_query(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<header class="container-fluid banner" <?php $background( get_field('header_background') ); ?>>
	<div class="row">
		<div class="col-lg-12">
			<div class="container navigation">
			
				<div class="row">
					<div class="col-lg-4">
						<a class="brand" href="<?= esc_url(home_url('/')); ?>">
							<div class="brand-logo"></div>
						</a>
					</div>

					<div class="col-lg-8">
						<nav class="nav-primary">
							<?php if ( has_nav_menu( 'primary_navigation' ) ) :?>
								<?php wp_nav_menu( ['theme_location' => 'primary_navigation','menu_class' => 'nav'] );?>
							<?php endif; ?>
						</nav>
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php if( have_rows('headlines') ): ?>

	<div class="row">
		<div class="container">

			<div class="row align-items-end banner-content">
				<div class="col-6">

						<div id="headlines-collect">
						<?php while( have_rows('headlines') ): the_row(); ?>
							<?php $lines = get_sub_field('lines');?>
							<p>
								<span class="h3"><?php echo $lines['line_orange'];?></span><br/>
								<span class="h4"><?php echo $lines['line_black'];?></span>
							</p>

						<?php endwhile; ?>
					</div>
					<span id="headlines-typed"></span>

					<?php $btn_orange = get_field('btn_orange'); ?>
					<?php $btn_black = get_field('btn_black'); ?>

						<?php if( $btn_orange || $btn_black ): ?>
							<div class="buttons">

								<?php if($btn_orange['text'] && $btn_orange['url']): ?>
									<?php $btn_arrow = ( $btn_orange['arrow'] != "none" ) ? ' btn-arrow arrow-'.$btn_orange['arrow'] : ""; ?>
									<a class="btn btn-lg btn-primary<?php echo $btn_arrow; ?>" href="<?php echo $btn_orange['url']; ?>">
										<?php echo $btn_orange['text']; ?>
									</a>

								<?php elseif($btn_orange): ?>
									<span class="btn btn-lg btn-primary">
										<?php echo $btn_orange['text']; ?>
									</span>
								<?php endif;?>

								<?php if($btn_black['text'] && $btn_black['url']): ?>
									<a class="btn btn-lg btn-black" href="<?php echo $btn_black['url']; ?>">
										<?php echo $btn_black['text']; ?>
									</a>

								<?php elseif( $btn_black['text'] ): ?>
									<span class="btn btn-lg btn-black">
										<?php echo $btn_black['text']; ?>
									</span>
								<?php endif;?>

							</div>

						<?php endif; ?>

					</div>

					<?php if($header_foreground = get_field('header_foreground') ): ?>
						<div class="col-6">
							<img class="img-fluid float-right" src="<?php echo $header_foreground; ?>" />
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
</header>
