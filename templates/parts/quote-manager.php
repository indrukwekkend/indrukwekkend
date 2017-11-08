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
	$manager['permalink'] = get_post_permalink();

	wp_reset_postdata();

endif;

?>

<div class="row pt-md-5 pb-5 pb-sm-6 part-quote-manager">
	<div class="d-none d-xl-block col-xl-2"></div>
		<div class="col-12 col-xl-10">

			<div class="row bg-orange quote-manager-container">
				<div class="col-12 col-md-9 col-xl-10 pt-4 align-self-stretch">

					<div class="row pl-lg-3 mb-4 mt-xl-5 align-items-center">
						<div class="col">
						<?php // Verwarrend? ja, maar die </> zijn voor het H element ?>
							<?php // echo "<".get_the_field('heading_size')."class='text-white m-0'>"; ?> 
								<p class="text-white m-0"><?php the_field('quote_manager');?></p>
							<?php // echo "</" . get_the_field('heading_size') . ">"; ?>
						</div>
					</div>

					<div class="row pl-lg-3 mb-4">
						<div class="col">
							<span class="text-white">Neem contact op met <a class="text-white" href="<?php echo $manager['permalink'];?>" title="<?php echo $manager['name']; ?>"><?php echo $manager['name']; ?></a></span>
						</div>
					</div>

					<div class="row pl-lg-4 no-gutters justify-content-start">

						<div class="col-8 col-md-12 mb-3 mb-md-4 mb-lg-5">
							<div class="row mt-5 mt-lg-0">
								<div class="col-12 col-md-12 col-lg-5 col-xl-4 mb-4 mb-lg-0 text-nowrap">
									<span class="icon mail mr-2"></span>
									<a class="text-white" href="mailto:<?php echo $manager['email'];?>"><?php echo $manager['email'];?></a>
								</div>

								<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 text-nowrap">
									<span class="icon phone mr-2"></span>
									<a class="text-white" href="tel:<?php echo $manager['landline'];?>"><?php echo $manager['landline'];?></a>
								</div>

								<div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0 text-nowrap">
									<span class="icon smartphone mr-2"></span>
									<a class="text-white" href="tel:<?php echo $manager['mobile'];?>"><?php echo $manager['mobile'];?></a>
								</div>
							</div>
						</div>

						<div class="col-4 d-block d-md-none align-self-end text-center p-0">
							<a href="<?php echo $manager['permalink'];?>">
								<img class="img-fluid" src="<?php echo $manager['image']; ?>" title="<?php echo $manager['name']; ?>" alt="<?php echo $manager['name']; ?>"/>
							</a>
						</div>
					</div>

				</div>

				<div class="col-md-3 col-xl-2 d-none d-md-block align-self-end text-center p-0">
					<a href="<?php echo $manager['permalink'];?>">
						<img class="img-fluid" src="<?php echo $manager['image']; ?>" title="<?php echo $manager['name']; ?>" alt="<?php echo $manager['name']; ?>"/>
					</a>
				</div>
			</div>

		</div>
	</div>