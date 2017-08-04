<?php 

$background = function($url){
   
    $url = ($url) ? $url : "http://placehold.it/1600x800?text=HEADER";
    
    echo 'style="background-image: url('.$url.');"';
};

?>




<header class="banner" <?php $background( get_field('header_background') ); ?> >
	
	<div class="container navigation">
	
		<a class="brand" href="<?= esc_url(home_url('/')); ?>">
    	
    			<span class="brand-logo">
    			
    				<span>indruk</span>wekkend
    			
    			</span>
    	
    			<span class="brand-tagline">
    	
    				<?php bloginfo('description'); ?>
    	
    			</span>
	
		</a>
		
		<div class="nav-phone">
			<span><?php the_field('global_telefoon', 'option'); ?></span>
		</div>
	
		<nav class="nav-primary">
    
      		<?php
    
            if (has_nav_menu('primary_navigation')) :
        
                wp_nav_menu([
            
                    'theme_location' => 'primary_navigation',
                
                    'menu_class' => 'nav'
            
                ]);
          
            endif;
        
            ?>
		
		</nav>
		

	</div>

</header>
