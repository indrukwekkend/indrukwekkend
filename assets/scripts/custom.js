jQuery(document).ready(function(){

	var scroll = new SmoothScroll('a[href*="#"]');
	var FadeSpeed = 80;
	
	function scrollbarWidth() {
		var scrollDiv = document.createElement("div");
		scrollDiv.style.cssText = 'width:100px;height:100px;overflow:scroll !important;position:absolute;top:-9999px';
		document.body.appendChild(scrollDiv);
		var result = scrollDiv.offsetWidth - scrollDiv.clientWidth;
		document.body.removeChild(scrollDiv);
		return result;
	}
	
	function overlayActive(){
		jQuery('body').css('padding-right', scrollbarWidth() + 'px');
		jQuery('body').addClass('overlay-active');
	}
	function overlayInactive(){
		jQuery('body').css('padding-right', '0px');
		jQuery('body').removeClass('overlay-active');
	}

	jQuery('a[href$="#cases"]').click(function(e){
		e.preventDefault();
		jQuery('#overlay-cases').fadeIn(FadeSpeed);
		overlayActive();
	});
	jQuery('#overlay-cases-close').click(function(e){
		e.preventDefault();
		jQuery('#overlay-cases').fadeOut(FadeSpeed);
		overlayInactive();
	});

	jQuery('a[href$="#teamleden"]').click(function(e){
		e.preventDefault();
		jQuery('#overlay-teamleden').fadeIn(FadeSpeed);
		overlayActive();
	});
	jQuery('#overlay-teamleden-close').click(function(e){
		e.preventDefault();
		jQuery('#overlay-teamleden').fadeOut(FadeSpeed);
		overlayInactive();
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

	jQuery('.contributors-list').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToScroll: 2,
		slidesToShow: 3,
		fade: false,
		swipe: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					centerMode: true,
					slidesToShow: 1,
					variableWidth: true,
				}
			},
			{
				breakpoint: 576,
				settings: {
					centerMode: true,
					slidesToShow: 1,
					variableWidth: true,
				}
			},
		],
	});
	jQuery('.teamleden-list, .related-list, .coworkers-list, .employee-cases-list').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 3,
		fade: false,
		swipe: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					centerMode: true,
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 576,
				settings: {
					centerMode: true,
					slidesToShow: 1,
				}
			},
			{
				breakpoint: 320,
				settings: {
					slidesToShow: 1,
				}
			},
		],
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
});