<!-- Titel / Heading right -->
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
			</div>

			<?php if (get_sub_field('extra_content_boolean')) : ?>
			
				<?php $extra = get_sub_field('extra_content'); ?>
			
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


				<?php $image = $extra['image']; ?>

				<?php if( !empty($image) ): ?>
			<div class="<?= $class?> text-center">
				<figure class="figure mt-1 mt-xl-3">
					<?php $title = $image['title']; ?>
					<?php $alt = $image['alt']; ?>
					<?php $caption = $image['caption']; ?>
					<?php $thumb = $image['sizes'][$imageSize]; ?>								
					
					<img src="<?= $thumb; ?>" class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>">
					<figcaption class="figure-caption"><?php echo $caption; ?></figcaption>
				</figure>
			

			</div>
				<?php endif; // image ?>
			
			<?php endif; //extra content ?>
				
		</div>
	</div>
</div>

<?php if (get_sub_field('extra_content_boolean') && !$extra['afbeelding_over_volle_breedte'] && $extra['quote_boolean']) : ?>
	
	<div class="row part-quote <?=$reverser?>">
		<div class="col-lg-5 p-0">
			<div class="pt-4 px-4 pb-3 pt-md-5 px-md-5 pb-md-4 mb-5 quote-container">
				<div class="quote-content">
					<?= $extra['quote'] ?>
				</div>
				<div class="quote-autograph">
					<img height="120" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/autographs/<?php the_field('autograph',  $extra['author'] );?>"/>
				</div>
			</div>
		</div>
	</div>
	
<?php endif; //Quote ?>
<!-- Einde Titel / Heading right -->