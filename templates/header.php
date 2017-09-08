<?php
$background = function ( $url ) {
    $url = ($url) ? $url : get_stylesheet_directory_uri() . "/dist/images/header_default.png";
    echo 'style="background-image: url(' . esc_url( $url ) . ');"';
};
?>
<header class="container-fluid banner" <?php $background( get_field('header_background') ); ?>>
	<div class="row">
		<div class="col-lg-12">
			<div class="container navigation">
			
				<div class="row">
					<div class="col-12 col-lg-4">
						<a class="brand" href="<?= esc_url(home_url('/')); ?>">
							<div class="brand-logo"></div>
						</a>
					</div>

					<div class="col-12 col-lg-8 d-none d-lg-block">
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
				<div class="col-12 col-xl-6 order-2 order-xl-1">

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
							<div class="buttons mb-5 mt-4 mb-xl-6">

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
						<div class="col-12 col-xl-6 order-1 order-xl-2">
							<img class="img-fluid float-right" src="<?php echo $header_foreground; ?>" />
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
</header>
