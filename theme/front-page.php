<div class="container">

	<div class="row row-padding align-items-center">

		<div class="col-sm-7">

			<div class="text-center">

				<p class="lead">Met veel trost werken wij o.a. voor deze merken</p>

			</div>

			<div class="row">
			
				<?php echo do_shortcode('[merken]'); ?>
		
			</div>

		</div>

		<div class="col-sm-5">

			<div class="row row-padding">
		
				<?php while (have_posts()) : the_post(); ?>
      	
      				<?php the_content(); ?>
		
				<?php endwhile; ?>
		
			</div>

			<div class="row">
				
				<?php echo do_shortcode('[quote]'); ?>
				
			</div>

		</div>

	</div>
	
	<div class="container">
	
		<div class="instagram-container">
		
			<div class="instagram-description">
				<div class="instagram-text">Spread the love</div>
				<div class="instagram-username"><span class="fa fa-instagram"></span>@ditisindrukwekkend</div>
			</div>
		
			<div class="instagram-feed">
			
				<?php echo do_shortcode('[instagram-feed]'); ?>
			
			</div>
		
		</div>
		
		<div class="row-padding">
		
    		<div class="instagram-link">
    			<a href="https://instagram.com/ditisindrukwekkend">volg ons werk op Instagram</a> <span class="icon-arrow-right"></span>
    		</div>
		
		</div>
	
	</div>

</div>