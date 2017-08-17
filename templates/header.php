<?php
$background = function ( $url ) {
    $url = ($url) ? $url : get_stylesheet_directory_uri() . "/dist/images/header_default.png";
    echo 'style="background-image: url(' . esc_url( $url ) . ');"';
};
?>
<header class="banner" <?php $background( get_field('header_background') ); ?>>
    <div class="container navigation">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
            <div class="brand-logo"></div>
        </a>
        <div class="nav-phone">
            <span><a href="tel:0725625482">072 - 562 54 82</a></span>
        </div>
        <nav class="nav-primary">
    
      		<?php
        if ( has_nav_menu( 'primary_navigation' ) ) :
            wp_nav_menu( [
                'theme_location' => 'primary_navigation',
                'menu_class' => 'nav'
            ] );
          
            endif;
        
        ?>
		
		</nav>
    </div>
	
	<?php if( $headline = get_field('headline') ): ?>
        
        <div class="banner-content">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-6">
                    <h1><?php echo $headline; ?></h1>
                
                		<?php if( get_field('subheadline') ): ?>
                
                			<h2><?php the_field('subheadline'); ?> <span class="text-gray">|</span>
                    </h2>
                
                		<?php endif; ?>
                		
                		<?php $btn_orange = get_field('btn_orange'); ?>
                		
                		<?php $btn_black = get_field('btn_black'); ?>
                
                		<?php if( $btn_orange || $btn_black ): ?>
                		
                    		<div class="buttons">
                    
                    			<?php if($btn_orange['text'] && $btn_orange['url']): ?>
                    				
                    				<a class="btn btn-lg btn-primary" href="<?php echo $btn_orange['url']; ?>"><?php echo $btn_orange['text']; ?></a>
                    			
                    			<?php elseif($btn_orange): ?>
                    			
                    				<span class="btn btn-lg btn-primary"><?php echo $btn_orange['text']; ?> \/</span>
                    			
                    			<?php endif;?>
                    			
                    			<?php if($btn_black['text'] && $btn_black['url']): ?>
                    				
                    				<a class="btn btn-lg btn-black" href="<?php echo $btn_black['url']; ?>"><?php echo $btn_black['text']; ?></a>
                    			
                    			<?php elseif( $btn_black['text'] ): ?>
                    			
                    				<span class="btn btn-lg btn-black"><?php echo $btn_black['text']; ?></span>
                    			
                    			<?php endif;?>
                    
                    		</div>
                		
                		<?php endif; ?>
                		
                	</div>
                	
            		<?php if($header_foreground = get_field('header_foreground') ): ?>
            		
                    	<div class="col-6">
                    <img class="img-fluid float-right" src="<?php echo $header_foreground; ?>" />
                </div>
            			
            		<?php endif; ?>
        
        		</div>
        </div>
    </div>
	
	<?php endif; ?>

</header>
