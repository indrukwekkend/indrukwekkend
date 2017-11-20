<?php

$extra = get_sub_field('extra_content');

// Orientatie
if ( get_sub_field( 'titel_links' ) ) :

	$holder_div = 'col-lg-1';
	$reverser = 'flex-row-reverse';
	$textOrientation = "";

else :

	$holder_div = 'col-lg-6';
	$reverser = '';
	$textOrientation = "text-right";

endif; // End Orientatie

// AOS Effect
if( $effect = get_sub_field('effect') ):

	$effect_type = 'data-aos="' . get_sub_field('type_' . $effect) . '"';

	$effect_once = ( get_sub_field('effect_once') ) ? 'data-aos-once="false"' : 'data-aos-once="true"';

endif; // End AOS

// Image AOS Effect
if( $image_effect = $extra['image_effect'] ):

	$image_effect_type = 'data-aos="' . $extra['image_type_' . $image_effect] . '"';

	$image_effect_once = ( $extra['image_effect_once'] ) ? 'data-aos-once="false"' : 'data-aos-once="true"';

endif; // End Image AOS

// Quote AOS Effect
if( $quote_effect = $extra['quote_effect'] ):

	$quote_effect_type = 'data-aos="' .  $extra['quote_type_' . $quote_effect] . '"';

	$quote_effect_once = ( $extra['quote_effect_once'] ) ? 'data-aos-once="false"' : 'data-aos-once="true"';

endif; // End Image AOS


// Parallax Effect
$image = $extra['image'];
$parallaxEffect = ($extra['parallax_effect'] ) ? $extra['parallax_effect'][0] : 0 ;
$parallaxEffect = intval( $parallaxEffect );

if ( $parallaxEffect > 0 && $parallaxEffect <= 1 ) :

	$style = " style='margin: 3rem 0 -3rem!important;' ";

elseif ( $parallaxEffect > 1 ) :

	$style = " style='margin: 6rem 0 -6rem!important;' ";

else :

	$style = "";

endif; // End Paralax
?>

<!-- Titel / Heading right / Is nu het complete content blok... -->
<div class="row justify-content-center pb-5 part-heading" <?= $effect_type; ?> <?= $effect_once; ?> >
	<div class="col-12 col-md-11 col-lg-10">
		<div class="row">

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

				<?php if (get_sub_field('extra_content_boolean') && !$extra['afbeelding_over_volle_breedte'] && $extra['quote_boolean'] && !empty($image)) : ?>

					<div class="part-quote" <?= $quote_effect_type; ?> <?= $quote_effect_once; ?> >

						<div class="pt-4 px-4 pb-3 pt-md-5 px-md-5 pb-md-4 mb-5 quote-container">

							<div class="quote-content">
								<?= $extra['quote'] ?>
							</div>

							<?php if ( !is_singular( 'teamleden' ) ) { ?>
								<div class="quote-autograph">
									<img height="120" src="<?php echo get_stylesheet_directory_uri();?>/dist/images/autographs/<?php the_field('autograph',  $extra['author'] );?>" />
								</div>
							<?php } ?>

						</div>

					</div>

				<?php endif; //Quote ?>

			</div>

			<?php if (get_sub_field('extra_content_boolean')) : ?>

			<?php

				if ( $extra['afbeelding_over_volle_breedte'] ) :

					$class = "col-12 pt-5";
					$imageSize = "heading-full-image";
					$figureClass = "";

				else :

					$class = "col-lg-6 mt-5";
					$imageSize = "heading-image";
					$figureClass = " mt-4 mt-xl-6";

					endif;
				?>

				<?php if( !empty($image) ): ?>

					<div class="<?= $class?> text-center" <?= $image_effect_type; ?> <?= $image_effect_once; ?>>

						<figure class="figure mt-1 mt-xl-3 rellax" data-rellax-speed="<?=$parallaxEffect?>" <?=$style?>>

						<?php $title = $image['title']; ?>
						<?php $alt = $image['alt']; ?>
						<?php $caption = $image['caption']; ?>
						<?php $thumb = $image['sizes'][$imageSize]; ?>

						<img src="<?= $thumb; ?>" class="figure-img img-fluid" title="<?= $title; ?>" alt="<?= $alt; ?>">
						<figcaption class="figure-caption"><?php echo $caption; ?></figcaption>

					</figure>

					</div>

				<?php else: ?>

					<div class="part-quote no-image col-lg-6 mt-lg-6" <?= $quote_effect_type; ?> <?= $quote_effect_once; ?> >
						<div class="pt-4 px-4 pb-3 pt-md-5 px-md-5 pb-md-4 mb-5 quote-container">

							<div class="quote-content">
								<?= $extra['quote'] ?>
							</div>

							<?php if ( !is_singular( 'teamleden' ) ) { ?>
								<div class="quote-autograph">
									<img height="120" src="<?php echo get_stylesheet_directory_uri();?>/dist/images/autographs/<?php the_field('autograph',  $extra['author'] );?>" />
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