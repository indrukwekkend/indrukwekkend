<div class="row part-quote">
	<div class="col-lg-5 p-0">
		<div class="pt-4 px-4 pb-3 pt-md-5 px-md-5 pb-md-4 mb-5 quote-container">
			<div class="quote-content">
				<?php the_sub_field('content')?>
			</div>
			<div class="quote-autograph">
				<img height="120" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/autographs/<?php the_field('autograph', get_sub_field('author'));?>"/>
			</div>
		</div>
	</div>
</div>