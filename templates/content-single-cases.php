<?php while (have_posts()) : the_post(); ?>
    
    <div class="row case-intro">

		<div class="container p-5">
		
        	<div class="row">
    
        		<div class="col text-center">
    
        			<div class="cases-title">
        			
        				<span class="text-brand">Case:</span> <?php the_title(); ?>
        			
        			</div>
    
        		</div>
    
        	</div>
    
        	<div class="row justify-content-center">
    
        		<div class="col-8">
    
    				<div class="case-description">
    
        				<?php the_content(); ?>
    
    				</div>
    
        		</div>
    
        	</div>
        	
		</div>

    </div>
    
    <?php // Content ?>
    
    <?php if( have_rows('content') ): ?>
    	
    	<div class="row case-content">
        	
        	<div class="container">
        
            	<?php while( have_rows('content') ): the_row(); ?>
            
            		<?php if( get_row_layout() == 'team_quote_left' ): ?>
            		
            			<div class="row case-row">
            			
            				<div class="col-lg-6">
            				
            					<div class="case-quote p-4">
            						
            						<div class="quote-content">
                    				
                    					<?php the_sub_field('content')?>
                    					
            						</div>
            						
            						<div class="quote-autograph">
            						
            							<?php if( $post_object = get_sub_field('author') ): ?>

                                    		<?php $post = $post_object; ?>
                                
                        					<?php setup_postdata($post); ?>
                        					
                        					<?php if( $autograph = get_field('autograph') ): ?>
                        					
                        						<img class="mt-3" width="120" src="<?php echo get_stylesheet_directory_uri()."/dist/images/autographs/".$autograph; ?>" />
                        					
                        					<?php endif; ?>
                        					
                        					<?php wp_reset_postdata(); ?>
                    						
                    					<?php endif; ?>
            						
            						</div>
                    				
                    			</div>
            				
            				</div>

        				</div>
        				
        			<?php elseif( get_row_layout() == 'client_quote_left' ): ?>
            		
            			<div class="row case-row">
            			
            				<div class="col-lg-6">
            				
            					<div class="case-quote p-4">
            						
            						<div class="quote-content">
                    				
                    					<?php the_sub_field('content')?>
                    					
            						</div>
            						
            						<div class="quote-autograph">
            						
            							<img src="<?php the_sub_field('author')?>"/>
            						
            						</div>
                    				
                    			</div>
            				
            				</div>

        				</div>
            
            		<?php elseif( get_row_layout() == 'image_left' ): ?>
            		
            			<div class="row justify-content-center case-row">
            			
            				<div class="col-10">
            				
            					<div class="row">
            					
            						<div class="col-lg-6">
            						
                        				<div class="case-title">
                        					
                        					<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
                        				
                	        				<span class="line"></span>
        
                        				</div>
                        				
                    				</div>
            					
            					</div>
            					
            					<div class="row">
            					
            						<div class="col-lg-6 mt-5">
          			
                        				<div class="case-image-left text-center">
                    					
                            				<img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>
                    					
                    					</div>
                    				
                    				</div>
                    				
                    				<div class="col-lg-6">
            	        			
            	        				<div class="case-content-left ">
                    					
                	        				<?php the_sub_field('content'); ?>
                	        				
        								</div>  
                    				
                    				</div>
            						
            					</div>
            				
            				</div>
            				
            			</div>
            
            		<?php elseif(get_row_layout() == 'image_right' ): ?>
            		
            			<div class="row justify-content-center case-row">
            			
            				<div class="col-10">
            				
            					<div class="row">
            					
            						<div class="col-lg-6"></div>
            					
            						<div class="col-lg-6 text-right">
            						
                        				<div class="case-title">
                        					
                        					<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
                        				
                	        				<span class="line"></span>
        
                        				</div>
                        				
                    				</div>
            					
            					</div>
            					
            					<div class="row">
                    				
                    				<div class="col-lg-6 mt-5 mt-lg-0">
            	        			
            	        				<div class="case-content-right">
                    					
                	        				<?php the_sub_field('content'); ?>
                	        				
        								</div>  
                    				
                    				</div>
                    				
                    				<div class="col-lg-6 mt-5">
          			
                        				<div class="case-image-right text-center">
                    					
                            				<img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>
                    					
                    					</div>
                    				
                    				</div>
            						
            					</div>
            				
            				</div>
            				
            			</div>
            				
            		<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
            		
            			<div class="row justify-content-center case-row">
            			
            				<div class="col-10">
            				
            					<div class="row">
            					
            						<div class="col-lg-6">
            						
                        				<div class="case-title">
                        					
                        					<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
                        				
                	        				<span class="line"></span>
        
                        				</div>
                        				
                    				</div>
            					
            					</div>
            					
            					<div class="row">
            					
            						<div class="col-lg-6 mt-5">
                    				
                    				</div>
                    				
                    				<div class="col-lg-6">
            	        			
            	        				<div class="case-content-left">
                    					
                	        				<?php the_sub_field('content'); ?>
                	        				
        								</div>  
                    				
                    				</div>
            						
            					</div>
            					
            					<div class="row">
            					
            						<div class="col-12">
            						
        								<div class="case-image-fullwidth pt-5">
                    					
                            				<img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>
                    					
                    					</div>
            						
            						</div>
            					
            					</div>
            				
            				</div>
            
                		</div>
                		
           			<?php endif; ?>            
            
            	<?php endwhile; ?>
        
        	</div>
    
    	</div>
	
	<?php endif; ?>
	
	
	<?php // Teamleden ?>

	<?php if( $post_objects = get_field('teamleden') ): ?>

        <div class="row case-teamleden">
        
        	<div class="container">
        	
            	<div class="row">
            
        			<div class="col-12">		
        				
        				<div class="row">
        				
        					<div class="col-xl-7 order-2 order-xl-1">
        					
        						<div class="row justify-content-end pr-4">
        						
            						<?php foreach( $post_objects as $post): ?>
                        
                    	                <?php setup_postdata($post); ?>
                    	                
                    	                
                    	                <div class="col-2 case-teamlid align-self-end">
                    	                
                                            <img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>"/>
                
                    	                </div>
                    
                	                <?php endforeach; ?>
                	                
        						</div>
        					
        					</div>
        				
        					<div class="col-xl-5 order-1 order-xl-2 text-right align-self-end">
        					
                				<div class="case-title">
                					
                					<span class="heading"><?php echo preg_replace('~((\w+\s){2})~', '$1' . "<br>", 'Wij werkten ook mee'); ?></span>
                				
        	        				<span class="line"></span>
        
                				</div>
                				
            				</div>
        				
        				</div>
        			
                	</div>
    			
    			</div>
    			
        	</div>

        </div>
        
        <?php wp_reset_postdata(); ?>

    <?php endif; ?>
	
	
	<?php // Client Quote ?>
	
	<?php if( $post_object = get_field('client_quote') ): ?>
	
		<div class="row case-client-quote">

    		<div class="container-fluid">
    		
    			<?php $post = $post_object; ?>
                        
                <?php setup_postdata($post); ?>
                
                <div class="row case-row">
        			
    				<div class="col-lg-6 p-0">
    				
    					<div class="case-quote">
    						
    						<div class="quote-content">
            				
            					<?php the_content(); ?>
            					
    						</div>
    						
    						<div class="quote-author">
    						
    							<p><?php the_title(); ?></p>
    						
    						</div>
            				
            			</div>
    				
    				</div>

				</div>
        	
    		</div>
    		
		</div>
		
		<?php wp_reset_postdata(); ?>
    
    <?php endif; ?>
    
    <?php // Case Quote ?>
	
	<?php if( have_rows('case_quote') ): ?>
	
		<div class="row case-team-quote">
	
        	<div class="container">
        		
        		<?php while( have_rows('case_quote') ): the_row(); ?>
            
    				<?php if( $post_object = get_sub_field('teamlid') ): ?>

                    	<?php $post = $post_object; ?>
                
        				<?php setup_postdata($post); ?>
                		
                		<div class="row justify-content-center">
                			
                			<div class="col-10">
                			
                				<div class="row team-quote-bg">
                					
                					<div class="col-8 p-5">
                					
                						<div class="row team-quote-content">
                						
                        					<div style="font-size:<?php the_sub_field('fontsize'); ?>px"><?php the_sub_field('content'); ?></div>
                						
                						</div>
                						
                						<div class="row">
                						
                							<div class="py-3">Neem contact op met <?php the_title(); ?></div>
                							
                						</div>
                						
                						<div class="row">
                						
                							<?php if( get_field('email') ):?>
                    						
                    							<div class="col-5 p-0">
                    								
                    								<div class="case-icon email">
                    								</div>
                    								
                    								<a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                    								
                    							</div>
                    						
                    						<?php endif; ?>
                    						
                    						<?php if( get_field('landline') ): ?>
                    						
                    							<div class="col p-0">
                    								
                    								<div class="case-icon phone">
                    								</div>
                    								
                    								<span><?php the_field('landline'); ?></span>
                    								
                    							</div>
                    							
                    						<?php endif; ?>
                    						
                    						<?php if( get_field('mobile') ):?>
                    						
                    							<div class="col p-0">
                    								
                    								<div class="case-icon mobile">
                    								
                    								</div>
                    								
                    								<span><?php the_field('mobile'); ?></span>
                    								
                    							</div>
                    							
                    						<?php endif; ?>
                    						
                    						<?php if( get_field('strava') ):?>
                    						
                    							<div class="col p-0">
                    								
                    								<div class="case-icon strava">
                    								
                    								</div>
                    								
                    								<span><?php the_field('strava'); ?></span>
                    								
                    							</div>
                    							
                    						<?php endif; ?>
                						
                						</div>
                					
                					</div>
                					
                					<div class="col-4 align-self-end text-center">
                					
                						<img class="img-fluid" src="<?php the_post_thumbnail_url('medium'); ?>"/>
                					
                					</div>
                				
                				</div>
                				
                				<?php wp_reset_postdata(); ?>
    						
    						<?php endif; ?>
                        	
            			</div>
            		
            		</div>
            	
            	<?php endwhile; ?>
        	
        	</div>
        	
		</div>
    	
    <?php endif; ?>
    
    <?php // Related Cases ?>
    
    <div class="row case-related">
        
    	<div class="container-fluid">
    	
        	<div class="row align-items-center">
        		
        		<div class="col-3 text-right pr-5">
        		
        			<span class="case-related-title">
        			Bekijk de<br>
        			 andere cases
        			 </span>
        		
        		</div>

                <?php if ( $tags = wp_get_post_tags($post->ID) ) : ?>
                
                    <?php $tag_ids = array(); ?>
            
            		<?php foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id; ?>
            
            		<?php 
                    $args = array(
                        'post_type' => 'cases',
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>3,
                        'caller_get_posts'=>1
                    );
                    ?>
              
                    <?php $my_query = new wp_query( $args ); ?>
             
                    <?php while( $my_query->have_posts() ) : ?>
                    
                        <?php $my_query->the_post(); ?>
               
            			<div class="col-3 case-related-item">
                
            				<div class="related-content">
            					
								<div class="related-image">
									
									<img class="img-fluid" src="<?php the_field('header_foreground'); ?>" />
								
								</div>
            					
            					<div class="related-title">
            					
            						<?php the_title(); ?>
            					
            					</div>
            				
            				</div>
            			
            			</div>
               
              		<?php endwhile; ?>
            
            		<?php wp_reset_postdata(); ?>
            	
            		<?php wp_reset_query(); ?>
            	
            	<?php endif; ?>

			</div>

		</div>

	</div>

<?php endwhile; ?>