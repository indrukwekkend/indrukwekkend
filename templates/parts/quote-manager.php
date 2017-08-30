<?php

$post_object = get_field('manager');
$manager = [];

if( $post_object ):

	$post = $post_object;

	setup_postdata( $post );

	$manager['name'] = get_the_title();
	$manager['email'] = get_field('email');
	$manager['landline'] = get_field('landline');
	$manager['mobile'] = get_field('mobile');
	$manager['image'] = get_the_post_thumbnail_url($post->ID, 'medium');
	

	wp_reset_postdata();

endif;

?>

<div class="row py-5">
	<div class="col-2"></div>
		<div class="col-10">

			<div class="row part-quote-manager">
				<div class="col-12 col-xl-10 pt-4 align-self-end">

					<div class="row pl-5 mb-4 mt-5 align-items-center">
						<?php // Verwarrend? ja, maar die </> zijn voor het H element ?>
						<<?php the_field('heading_size'); ?> class="text-white m-0">
							<?php the_field('quote_manager');?>
						</<?php the_field('heading_size'); ?>>
					</div>

					<div class="row pl-5 mb-4">
						<span class="text-white">Neem contact op met <?php echo $manager['name']; ?></span>
					</div>

					<div class="row pl-4 mb-5 no-gutters justify-content-start">

						<div class="col-xl-4 text-nowrap">
							<span class="icon mail mr-2"></span>
							<a class="text-white" href="mailto:<?php echo $manager['email'];?>"><?php echo $manager['email'];?></a>
						</div>

						<div class="col-xl-3 text-nowrap">
							<span class="icon phone mr-2"></span>
							<a class="text-white" href="tel:<?php echo $manager['landline'];?>"><?php echo $manager['landline'];?></a>
						</div>

						<div class="col-xl-2 text-nowrap">
							<span class="icon smartphone mr-2"></span>
							<a class="text-white" href="tel:<?php echo $manager['mobile'];?>"><?php echo $manager['mobile'];?></a>
						</div>

					</div>

				</div>

				<div class="col-xl-2 d-none d-xl-block align-self-end text-center p-0">

					<img class="img-fluid" src="<?php echo $manager['image']; ?>" />

				</div>
			</div>

		</div>
	</div>