<div id="intro" class="page-header">
	<?php if(is_singular('teamleden')):?>
	<div class="container pt-6">
	<?php else:?>
	<div class="container py-6">
	<?php endif;?>
		<div class="row justify-content-center">
			<div class="col-12 col-md-11 col-lg-8">
				<?php the_content(); ?>
				<?php if(is_singular('teamleden') && get_field('autograph')):?>
					<img height="200" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/autographs/<?php the_field('autograph');?>" title="<?php the_title();?>" alt="<?php the_title();?>"/>
				<?php endif;?>
			</div>
		</div>
	</div>
</div>