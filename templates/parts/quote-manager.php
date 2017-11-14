<?php
$post_object = get_field( 'manager' );
$manager = [];
if ( $post_object ) :
	$post = $post_object;
	setup_postdata( $post );
	$manager['name'] = get_the_title();
	$manager['email'] = get_field( 'email' );
	$manager['landline'] = get_field( 'landline' );
	$manager['mobile'] = get_field( 'mobile' );
	$manager['image'] = get_the_post_thumbnail_url( $post->ID, 'medium' );
	$manager['permalink'] = get_post_permalink();
	$manager['autograph'] = get_field('autograph');
	wp_reset_postdata();

endif;

?>

<div class="row pt-md-5 pb-5 pb-sm-6 part-quote-manager">
	<div class="col-12 col-xl-4 mt-3 mt-xl0">
		<div class="heading">
			<h4 class="title">
				<span>Case Manager:</span>
			</h4>
			<span class="line"></span>
		</div>
	</div>
	<div class="col-12 col-xl-8 mt-5 mt-xl-0">

		<div class="row bg-orange quote-manager-container">
			<div class="col-12 col-md-9 col-xl-10 pt-4 align-self-stretch">

				<div class="row pl-lg-2 mb-4 mt-xl-5 align-items-center">
					<div class="col">
						<?php // Verwarrend? ja, maar die </> zijn voor het H element ?>
							<?php // echo "<".get_the_field('heading_size')."class='text-white m-0'>"; ?> 
								<p class="text-white m-0"><?php the_field('quote_manager');?></p>
							<?php // echo "</" . get_the_field('heading_size') . ">"; ?>
						</div>
				</div>

				<div class="row pl-lg-2">
					<div class="col">
						<a class="text-white" href="<?php echo $manager['permalink'];?>" title="<?php echo $manager['name']; ?>">
							<img height="90" src="<?php echo get_stylesheet_directory_uri();?>/dist/images/autographs/wit/<?php echo $manager['autograph']; ?>"/>
						</a>
					</div>
				</div>

				<div class="row pl-lg-2 no-gutters justify-content-start">

					<div class="col-8 col-md-12 mb-3 mb-md-4 mb-lg-2">
						<div class="row mt-5 mt-lg-0 no-gutters">

							<div class="col mb-4 text-nowrap">
								<span class="icon info mr-1"></span> <span class="text-white"><a class="text-white" href="<?php echo $manager['permalink'];?>" title="Profiel van <?php echo $manager['name']; ?>">Bekijk profiel</a></span>
							</div>

							<div class="col mb-4 text-nowrap pr-2">
								<span class="icon mail mr-1"></span> <a class="text-white" href="mailto:<?php echo $manager['email'];?>"><?php echo $manager['email'];?></a>
							</div>

							<div class="col mb-4 text-nowrap">
								<span class="icon phone mr-1"></span> <a class="text-white" href="tel:<?php echo $manager['landline'];?>"><?php echo $manager['landline'];?></a>
							</div>

							<div class="col mb-4 text-nowrap">
								<span class="icon smartphone mr-1"></span> <a class="text-white" href="tel:<?php echo $manager['mobile'];?>"><?php echo $manager['mobile'];?></a>
							</div>

						</div>
					</div>

					<div class="col-4 d-block d-md-none align-self-end text-center p-0">
						<a href="<?php echo $manager['permalink'];?>"> <img class="img-fluid" src="<?php echo $manager['image']; ?>" title="<?php echo $manager['name']; ?>" alt="<?php echo $manager['name']; ?>" />
						</a>
					</div>
				</div>

			</div>

			<div class="col-md-3 col-xl-2 d-none d-md-block align-self-end text-center p-0">
				<a href="<?php echo $manager['permalink'];?>"> <img class="img-fluid" src="<?php echo $manager['image']; ?>" title="<?php echo $manager['name']; ?>" alt="<?php echo $manager['name']; ?>" />
				</a>
			</div>
		</div>

	</div>
</div>