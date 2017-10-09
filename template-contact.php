<?php
/**
 * Template Name: Contact Template
 */
?>
<div class="primary-content">
	<div class="container pt-6">
		<div class="row justify-content-start pb-5">
			<div class="col-xl-11">
				<div class="row">
					
					<div class="col-lg-2"></div>
					
					<div class="col-lg-5">

						<div class="heading mb-4">
							<h4 class="title">
								<span>Stuur een <br>bericht</span>
							</h4>
							<span class="line"></span>
						</div>

					</div>
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 mt-xl-4 order-2 order-lg-1 ">
							<div class="row my-5 mt-lg-6">
								<div class="col mt-3 mt-xl-6">
									<div class="row align-items-start py-5 bg-orange contact-social">
										<div class="col-12 col-sm-5 col-lg-6 mb-3 mb-lg-0 text-lg-right">
											<h4 class="text-white">Wij zijn <br>ook zeer <br>sociaal</h4>
										</div>
										<div class="col-12 col-sm-7 col-lg-6 text-left">
											<div class="row">
												<div class="col mb-3">
													<a class="icon twitter-white" href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"></a>
													<a class="text-white ml-2" href="<?php the_field('twitter_link', 'option'); ?>" target="_blank"><?php the_field('twitter_label', 'option'); ?></a>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<a class="icon facebook-white" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"></a>
													<a class="text-white ml-2" href="<?php the_field('facebook_link', 'option'); ?>" target="_blank"><?php the_field('facebook_label', 'option'); ?></a>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<a class="icon instagram-white" href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"></a>
													<a class="text-white ml-2" href="<?php the_field('instagram_link', 'option'); ?>" target="_blank"><?php the_field('instagram_label', 'option'); ?></a>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<a class="icon linkedin-white" href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"></a>
													<a class="text-white ml-2" href="<?php the_field('linkedin_link', 'option'); ?>" target="_blank"><?php the_field('linkedin_label', 'option'); ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					<div class="col-lg-5 form order-1 order-lg-2 align-self-end">
						<?php gravity_form( 1, false, false, false, '', true );?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>