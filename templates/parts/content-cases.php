<?php if( $post_objects = get_field('cases') ): ?>
			<div class="row align-items-center part-related-cases">
				<div class="col-12 col-lg-3 py-3 py-lg-0 text-lg-right pr-5">
					<span class="related-title">
						<h5 class="d-none d-lg-block"><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", get_field('cases_title')); ?></h5>
						<h4 class="d-block d-lg-none"><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", get_field('cases_title')); ?></h4>
					</span>
				</div>
				<div class="col-12 col-lg-9 p-0">
					<div class="related-list">
						<?php foreach( $post_objects as $post): ?>
							<div class="col related-item">
								<div class="related-item-content">
									
									<?php $image = get_field('header_foreground') ?>
									<?php 
										$thumb = $image['sizes'][ 'overlay-land' ]; 
										$alt = $image['alt'];
									?>
								
										
								
									
									<div class="related-item-image" style="background-image:url(<?= $thumb ?>);"></div>
																		
									<div class="related-item-title">
										<h4><?php the_title(); ?></h4>
									</div>
									<a class="related-item-hover" href="<?php echo esc_url( get_post_permalink() ); ?>">
										<div class="hover-title">
											<h4 class="text-white"><?php the_title(); ?></h4>
											<hr>
											<span class="text-white">
												<?php
												$tags = get_the_tags();
												$total_tags = count($tags);
												$i=0;
												if($tags && ($total_tags > 1) ):
													foreach($tags as $tag):
														$i++;
														echo $tag->name;
														if($i < ($total_tags - 1) ):
															echo ', ';
														elseif($i < ($total_tags) ):
															echo " en ";
														endif;
													endforeach;
												else:
													if($tags):
														foreach($tags as $tag):
															echo $tag->name;
														endforeach;
													endif;
												endif;
												?>
											</span>
										</div>
									</a>
								</div>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
<?php endif; ?>