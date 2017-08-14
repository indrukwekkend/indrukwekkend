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
    
        	<div class="row">
    
        		<div class="col">
    
    				<div class="case-description">
    
        				<?php the_content(); ?>
    
    				</div>
    
        		</div>
    
        	</div>
        	
		</div>

    </div>
    
    <?php // Content ?>
    
    <?php if( have_rows('content') ): ?>
    	
    	<div class="row case-bg case-content">
        	
        	<div class="container">
        
            	<?php while( have_rows('content') ): the_row(); ?>
            
            		<div class="row case-row">
            		
            			<?php if( get_row_layout() == 'quote_left' ): ?>
            			
            				<div class="col-5">
            				
            					<div class="quote">
            						
            						<div class="quote-content">
                    				
                    					<?php the_sub_field('content')?>
                    					
            						</div>
            						
            						<div class="quote-autograph">
            						
            							<img src="<?php the_sub_field('author')?>"/>
            						
            						</div>
                    				
                    			</div>
            				
            				</div>
            
            			<?php elseif( get_row_layout() == 'image_left' ): ?>
            			
            				<div class="col-12">
            				
            					<div class="row">
            					
            						<div class="col-md-6 col-xl-5 offset-xl-1">
            						
                        				<div class="case-title">
                        					
                        					<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
                        				
                	        				<span class="line"></span>
        
                        				</div>
                        				
                    				</div>
            					
            					</div>
            					
            					<div class="row">
            					
            						<div class="col-md-6 col-xl-5 offset-xl-1 mt-5">
          			
                        				<div class="case-image-left">
                    					
                            				<img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>
                    					
                    					</div>
                    				
                    				</div>
                    				
                    				<div class="col-md-6 col-xl-5">
            	        			
            	        				<div class="case-content-left">
                    					
                	        				<?php the_sub_field('content'); ?>
                	        				
        								</div>  
                    				
                    				</div>
            						
            					</div>
            				
            				</div>
            
            			<?php elseif(get_row_layout() == 'image_right' ): ?>
            			
            				<div class="col-12">
            				
            					<div class="row">
            					
            						<div class="col-md-6 col-xl-5 offset-xl-1"></div>
            					
            						<div class="col-md-6 col-xl-5 text-right">
            						
                        				<div class="case-title">
                        					
                        					<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
                        				
                	        				<span class="line"></span>
        
                        				</div>
                        				
                    				</div>
            					
            					</div>
            					
            					<div class="row">
                    				
                    				<div class="col-md-6 col-xl-5 offset-xl-1">
            	        			
            	        				<div class="case-content-right">
                    					
                	        				<?php the_sub_field('content'); ?>
                	        				
        								</div>  
                    				
                    				</div>
                    				
                    				<div class="col-md-6 col-xl-5 mt-5">
          			
                        				<div class="case-image-right">
                    					
                            				<img class="img-fluid" src="<?php the_sub_field('image'); ?>"/>
                    					
                    					</div>
                    				
                    				</div>
            						
            					</div>
            				
            				</div>
            				
            			<?php elseif(get_row_layout() == 'image_fullwidth' ): ?>
            			
            				<div class="col-12">
            				
            					<div class="row">
            					
            						<div class="col-md-6 col-xl-5 offset-xl-1">
            						
                        				<div class="case-title">
                        					
                        					<span class="heading"><?php echo preg_replace('~((\w+\s){3})~', '$1' . "<br>", get_sub_field('title')); ?></span>
                        				
                	        				<span class="line"></span>
        
                        				</div>
                        				
                    				</div>
            					
            					</div>
            					
            					<div class="row">
            					
            						<div class="col-md-6 col-xl-5 offset-xl-1 mt-5">
                    				
                    				</div>
                    				
                    				<div class="col-md-6 col-xl-5">
            	        			
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
            
            			<?php endif; ?>
            
            		</div>
            
            	<?php endwhile; ?>
        
        	</div>
    
    	</div>
	
	<?php endif; ?>
	
	
	<?php // Teamleden ?>

	<?php if( $post_objects = get_field('teamleden') ): ?>

        <div class="row case-teamleden">
        
        	<div class="container">
             
                <div class="row">
                
                	<div class="col">
                	
                		<div class="teamleden">
            
                	        <?php foreach( $post_objects as $post): ?>
            
            	                <?php setup_postdata($post); ?>
            	                
            	                <div class="teamlid">
            	                
                                    <?php the_title(); ?>
                                    <?php the_field('email'); ?>
                                    <?php the_field('landline'); ?>
                                    <?php the_field('mobile'); ?>
                                    <?php the_post_thumbnail('medium'); ?>
        
            	                </div>
            
        	                <?php endforeach; ?>
            
                		</div>
                
                	</div>
        
                </div>
            
        	</div>

        </div>
        
        <?php wp_reset_postdata(); ?>

    <?php endif; ?>
	
	
	<?php // Client Quotes ?>
	
	<?php if( have_rows('client_quote') ): ?>
	
		<div class="row case-client-quote">

    		<div class="container">
    
            	<?php while( have_rows('client_quote') ): the_row(); ?>
            
            		<div class="row">
            			
            			<div class="col">
                        	<?php the_sub_field('title'); ?>
                        	<?php the_sub_field('content'); ?>
            			</div>
            		
            		</div>
            	
            	<?php endwhile; ?>
        	
    		</div>
    		
		</div>
    
    <?php endif; ?>
    
    <?php // Case Quotes ?>
	
	<?php if( have_rows('case_quote') ): ?>
	
		<div class="row case-quote">
	
        	<div class="container">
        		
        		<?php while( have_rows('case_quote') ): the_row(); ?>
            
            		<div class="row">
            			
            			<div class="col">
            			
            				<?php if( $post_objects = get_sub_field('teamlid') ): ?>
        
                            	<?php foreach( $post_objects as $post): ?>
                
                	                <?php setup_postdata($post); ?>
                	                
                	                <?php the_title(); ?>
                	                
        						<?php endforeach; ?>
    						
    						<?php endif; ?>
                        	
                        	
                        	<?php the_sub_field('content'); ?>
                        	<?php the_sub_field('fontsize'); ?>
            			</div>
            		
            		</div>
            	
            	<?php endwhile; ?>
        	
        	</div>
        	
		</div>
    	
    <?php endif; ?>

<?php endwhile; ?>