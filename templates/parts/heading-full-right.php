<div class="row py-5">
	<div class="col-12">
		<div class="row">
			<div class="col-lg-6"></div>
			<div class="col-lg-5 text-right">

				<div class="heading">
					<span class="title h4"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span> <span class="line"></span>
				</div>
			</div>
		</div>
			
		<div class="row">
			<div class="col-lg-6 mt-5">
								<?php the_sub_field('content'); ?>
			</div>

			<div class="col-lg-6"></div>

		</div>
		<div class="row">
			<div class="col-12 pt-5 text-center">

				<?php if( get_sub_field('fullwidth') == false ){ $image_class = ( $alignment = get_sub_field('alignment') ) ? "float-".$alignment : ""; }?>
				<figure class="figure<?php echo " ".$image_class; ?>">
					<img src="<?php the_sub_field('image'); ?>" class="figure-img img-fluid" alt="<?php the_sub_field('image_description');?>">
					<figcaption class="figure-caption"><?php the_sub_field('image_description');?></figcaption>
				</figure>

			</div>
		</div>
	</div>
</div>