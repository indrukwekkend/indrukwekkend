<!-- Titel / Heading right / Is nu het complete content blok... -->
<div class="row justify-content-center pb-5 part-heading">
	<div class="col-12 col-md-11 col-lg-10">
		<div class="row">			
		
		<?php  // bepaal de orientatie: 
			if (get_sub_field('titel_links')): 			
				//echo "links";
				$holder_div = 'col-lg-1';
				$reverser = 'flex-row-reverse';
				$textOrientation = "";
			else:		
				$holder_div = 'col-lg-6';
				$reverser = '';
				$textOrientation = "text-right";
				//echo "rechts";			
			endif;			
		?>
		
			<div class="<?=$holder_div?>"></div>
			<div class="col-lg-5 <?=$textOrientation?> ">

				<div class="heading">
					<h4 class="title">
						<span><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
					</h4>
					<span class="line"></span>
				</div>

			</div>
		</div>
		<div class="row <?=$reverser?>">

			<div class="col-lg-6 mt-5 mt-xl-0 ">
				<?php the_sub_field('content'); ?>
				
				
				<?php $extra = get_sub_field('extra_content'); ?>
				<?php $image = $extra['image']; ?>
				<?php $parallaxEffect = ($extra['parallax_effect'] ) ? $extra['parallax_effect'][0] : 0 ; ?>
				<?php 
					
					 $parallaxEffect = intval($parallaxEffect);
					
					if ($parallaxEffect > 0 && $parallaxEffect <= 1): 
						$style = " style='margin: 3rem 0 -3rem!important;' ";
						
					elseif ($parallaxEffect > 1):
						 $style = " style='margin: 6rem 0 -6rem!important;' ";
					else:	
						$style = ""; 
					endif;
					
										
					
				?>
				
				
				<?php if (get_sub_field('extra_content_boolean') && !$extra['afbeelding_over_volle_breedte'] && $extra['quote_boolean'] && !empty($image)) : ?>
	
					<div class="part-quote" data-aos="fade-up-left" >						
						<div class="pt-4 px-4 pb-3 pt-md-5 px-md-5 pb-md-4 mb-5 quote-container" >
															
							<div class="quote-content">
								<?= $extra['quote'] ?>
							</div>
							<?php if ( !is_singular( 'teamleden' ) ) { ?>
								<div class="quote-autograph">
									<img height="120" src="<?php echo get_stylesheet_directory_uri();?>/dist/images/autographs/<?php the_field('autograph',  $extra['author'] );?>"/>	
								</div>
							<?php } ?>
						</div>
					</div>
					
				<?php endif; //Quote ?>
				
				
			</div>

			<?php if (get_sub_field('extra_content_boolean')) : ?>
			
				
			
				<?php if ( $extra['afbeelding_over_volle_breedte']): 
					
					  	$class = "col-12 pt-5";
					  	$imageSize = "heading-full-image";
					  	$figureClass = "";
					  
					  else: 
					    
					    $class = "col-lg-6 mt-5";
					  	$imageSize = "heading-image";
					  	$figureClass = " mt-4 mt-xl-6";
					  
					  endif;						
					 ?>


				

				<?php if( !empty($image) ): ?>
			
								
			<div class="<?= $class?> text-center">
				<figure class="figure mt-1 mt-xl-3 rellax" data-rellax-speed="<?=$parallaxEffect?>" <?=$style?> >
				<?php //var_dump($parallaxEffect); ?>
					<?php $title = $image['title']; ?>
					<?php $alt = $image['alt']; ?>
					<?php $caption = $image['caption']; ?>
					<?php $thumb = $image['sizes'][$imageSize]; ?>								
					
					<img src="<?= $thumb; ?>" class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>">
					<figcaption class="figure-caption"><?php echo $caption; ?></figcaption>
				</figure>
			

			</div>
				<?php else: ?>
			
			<div class="part-quote no-image col-lg-6 mt-lg-6 ">						
				<div class="pt-4 px-4 pb-3 pt-md-5 px-md-5 pb-md-4 mb-5 quote-container" data-aos="flip-left">
													
					<div class="quote-content">
						<?= $extra['quote'] ?>
					</div>
					<?php if ( !is_singular( 'teamleden' ) ) { ?>
						<div class="quote-autograph">
							<img height="120" src="<?php echo get_stylesheet_directory_uri();?>/dist/images/autographs/<?php the_field('autograph',  $extra['author'] );?>"/>	
						</div>
					<?php } ?>
				</div>
			</div>
					
			
				<?php endif; // image ?>
			
			<?php endif; //extra content ?>
				
		</div>
	</div>
</div>
<!-- Einde Titel / Heading right -->