<!-- gallery right -->
<?php $title = get_sub_field('title'); ?>
<div class="pb-5 part-gallery">
	<div class="col-12">
		<div class="row justify-content-center">
			<div class="col-12 col-md-11 col-lg-10">
				<div class="row">
					<div class="col-lg-6"></div>
					<div class="col-lg-5 text-right">
						<div class="heading">
							<h4 class="title">
								<span><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", $title); ?></span>
							</h4>
							<span class="line"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mt-5 mt-xl-0">
						<?php the_sub_field('content'); ?>
					</div>
					<div class="col-lg-6"></div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-11 col-xl-10 px-0 pt-5 text-center">
				<div class="gallery-list">
					<?php if( have_rows('images') ): ?>
						<?php $i = 0;?>
						<?php while ( have_rows('images') ) : the_row(); ?>
						
							<?php 

								$image = get_sub_field('image');
								
								
								if( !empty($image) ): 
								
								
									// vars
									$url = $image['url'];
									$title = $image['title'];
									$alt = $image['alt'];
									$caption = $image['caption'];
									
									// thumbnail
									switch ($i) {
									    case 0:
									        $size = 'gallery-square';
									        $rellax_speed = 0;
									        break;
									    case 1:
									        $size = 'gallery-land';
									        $rellax_speed = -1;
									        break;
									    case 2:
									        $size = 'gallery-land';
									        $rellax_speed = 1;
									        break;
									    case 3:
									        $size = 'gallery-port';
									        $rellax_speed = -2;
									        break;    
									}
																		
									$thumb = $image['sizes'][ $size ];
									$width = $image['sizes'][ $size . '-width' ];
									$height = $image['sizes'][ $size . '-height' ];
							
							 ?>
							 <?php $i++;?>
							 <figure class="rellax figure image-<?= $i; ?>" data-rellax-speed="<?= $rellax_speed; ?>">
								<a href="<?php echo $url; ?>" title="<?php echo $title; ?>" data-lightbox="roadtrip">
							
									<img src="<?= $thumb; ?>" alt="<?= $alt; ?>" width="<?= $width; ?>" height="<?= $height; ?>" />
							
								</a>
							</figure>
							
							
							<?php endif; ?>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>