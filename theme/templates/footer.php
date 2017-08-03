<footer class="content-info">
	<div class="container">
		<div class="footer-content">
        		<div class="footer-block">
        			<div class="icon"></div>
        			<div class="content">
        				<span class="title">De beller is sneller</span>
        				<span class="description">
        					<a href="tel:<?php the_field("global_telefoon", "options"); ?>"><?php the_field("global_telefoon", "options"); ?></a>
        				</span>
        			</div>
        		</div>
        		<div class="footer-block">
        			<div class="icon"></div>
        			<div class="content">
        				<span class="title">Mailen mag ook</span>
        				<span class="description">
        					<a href="mailto:<?php the_field("global_email", "options"); ?>"><?php the_field("global_email", "options"); ?></a>
        				</span>
        			</div>
        		</div>
        		<div class="footer-block">
        			<div class="icon"></div>
        			<div class="content">
        				<span class="title">Hier vind je ons</span>
        				<span class="description"><?php the_field("global_adres", "options"); ?></span>
        			</div>
        		</div>
		</div>
		
		<div class="footer-social">
			<span class="title">Wij zijn sociaal</span>
			<span class="fa fa-instagram"></span>
			<span class="fa fa-facebook"></span>
			<span class="fa fa-twitter"></span>
			<span class="fa fa-linkedin"></span>
		</div>
	</div>
</footer>
