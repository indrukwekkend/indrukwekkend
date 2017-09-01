<?php
/**
 * Template Name: Contact Template
 */
?>
<div class="row primary-content">
	<div class="container pt-5">
		<div class="row justify-content-start pb-5">
			<div class="col-xl-11">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-5">

						<div class="heading">
							<h4 class="title">
								<span><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", 'Stuur een bericht'); ?></span>
							</h4>
							<span class="line"></span>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-7 mt-xl-4">
							<div class="row my-5 mt-xl-6">
								<div class="col-xl-8 mt-3 mt-xl-6">
									<div class="row align-items-start py-5 bg-orange contact-social">
										<div class="col-6 text-right">
											<h4 class="text-white">Wij zijn<br>ook zeer <br>sociaal</h4>
										</div>
										<div class="col-6 text-left">
											<div class="row">
												<div class="col mb-3">
													<span class="icon twitter-white"></span>
													<a class="text-white ml-2" href="https://twitter.com/indrukwekkend">@indrukwekkend</a>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<span class="icon facebook-white"></span>
													<a class="text-white ml-2" href="https://facebook.com/indrukwekkend">/indrukwekkend</a>
												</div>
											</div>
											<div class="row">
												<div class="col mb-3">
													<span class="icon instagram-white"></span>
													<a class="text-white ml-2" href="https://twitter.com/indrukwekkend">@indrukwekkend</a>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<span class="icon linkedin-white"></span>
													<a class="text-white ml-2" href="https://linkedin.com/indrukwekkend">@indrukwekkend</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					<div class="col-lg-5">
						<?php gravity_form( 1, false, false, false, '', false );?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>