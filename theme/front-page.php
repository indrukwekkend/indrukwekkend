<div class="container">
	
	<div class="row row-padding align-items-center">
		
		<div class="col-sm-7">
		
			<div class="text-center">
			
				<p class="lead">Met veel trost werken wij o.a. voor deze merken</p>
				
			</div>
		
			<div class="row">
			
				<!-- VERVANG DIT MET EEN POST TYPE PLUGIN -->
        			<?php if( have_rows('repeater_merken') ): ?>
        			
        				<div class="brands-list">
                    
                			<?php while ( have_rows('repeater_merken') ) : the_row(); ?>
                            
        						<div class="brands-item">
        							
        							<img class="img-fluid" width="120" src="<?php the_sub_field('merk_afbeelding'); ?>" title="<?php the_sub_field('merk_naam'); ?>">
        						
        						</div>
                            
                			<?php endwhile; ?>
        				
        				</div>
                    
        				<?php else : ?>
                    
                        <h1>Indrukwekkend werk niet (meer?) met merken.</h1>
                    
                    <?php endif; ?>
		
			</div>
		
		</div>
		
		<div class="col-sm-5">
		
			<div class="row row-padding">
		
				<?php while (have_posts()) : the_post(); ?>
      	
      				<?php the_content(); ?>
		
				<?php endwhile; ?>
		
			</div>
			
			<div class="row">
				
				<!-- VERVANG DIT MET EEN POST TYPE PLUGIN -->
				<div class="quote">
				
					<div class="quote-content">
						
						<span class="encapsule"></span>
						
						<p>Onze brainstormsessies en procesbesprekingen zorgde voor een verheldering in onze creatieve invulling. Kim word een echte Kim; iemand die je graag zou ontmoeten!</p>
						
						<span class="encapsule"></span>
					
					</div>
					
					<div class="quote-author">
						<p>Sjakie Zwart - Senior Marketeer ANWB</p>
					</div>
					
					<div class="quote-nav">
						<ul>
							<li class="active">1</li>
							<li>2</li>
							<li>3</li>
						</ul>
					</div>
				
				</div>
				
			</div>
		
		</div>
	
	</div>

</div>