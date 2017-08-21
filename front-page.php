<?php use Roots\Sage\Extras; ?>
<div class="container mb-5">
	<div class="row row-padding align-items-center">
		<div class="col-sm-7">
			<div class="text-center">
				<p class="lead">Met veel trost werken wij o.a. voor deze merken</p>
			</div>
			<div class="row">
				<?php echo Extras\indrukwekkend_merken(); ?>
			</div>
			<div class="row-padding text-center">
				<a class="btn btn-black" href="">Bekijk ons werk</a>
			</div>
		</div>
		<div class="col-sm-5">
			<div class="row row-padding">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			<div class="row">
				<?php echo Extras\indrukwekkend_quotes(); ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="instagram-container">
			<div class="instagram-description">
				<div class="instagram-text">Spread the love</div>
				<div class="instagram-username">
					<span class="fa fa-instagram"></span>@ditisindrukwekkend
				</div>
			</div>
			<div class="instagram-feed">
				<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</div>
		<div class="row text-center">
			<div class="col mb-3">
				<div class="instagram-link">
					<a href="https://instagram.com/ditisindrukwekkend">volg ons werk op Instagram</a> <span class="icon-arrow-right"></span>
				</div>
			</div>
		</div>
	</div>
</div>