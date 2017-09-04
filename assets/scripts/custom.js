jQuery(document).ready(function(){

	jQuery(function () {
		jQuery('[data-toggle="tooltip"]').tooltip();
	});

	jQuery('a[href$="#cases"]').click(function(e){
		e.preventDefault();
		jQuery('#overlay-cases').fadeIn(80);
	});
	jQuery('#overlay-cases-close').click(function(e){
		e.preventDefault();
		jQuery('#overlay-cases').fadeOut(80);
	});

	jQuery('a[href$="#teamleden"]').click(function(e){
		e.preventDefault();
		jQuery('#overlay-teamleden').fadeIn(80);
	});
	jQuery('#overlay-teamleden-close').click(function(e){
		e.preventDefault();
		jQuery('#overlay-teamleden').fadeOut(80);
	});

	jQuery('.quote-list').slick({
		dots: true,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 1,
		fade: true,
		adaptiveHeight: true,
	});

	jQuery('.teamleden-list, .related-list, .coworkers-list').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 3,
		fade: false,
	});

	if(jQuery("#headlines-collect").length){
		var typed = new Typed('#headlines-typed', {
			stringsElement: '#headlines-collect',
			loop: true,
			showCursor: true,
			cursorChar: '|',
			autoInsertCss: true,
			contentType: 'html',
			typeSpeed: 50,
			backSpeed: 20,
			backDelay: 4000,
		});
	}

	jQuery(".btn-arrow").on('click', function(e){
		var that = e.target;
		
		jQuery(that).addClass("btn-activated");
		
		setTimeout(function(){
			jQuery(that).removeClass("btn-activated");
		}, 500);
	});

	var scroll = new SmoothScroll('a[href*="#"]');
});