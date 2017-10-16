jQuery(document).ready(function(){

	var scroll = new SmoothScroll('a[href*="#"]');
	var FadeSpeed = 80;
	var gallerySlick = jQuery('.gallery-list');
	var gallerySettings = {
			dots: false,
			infinite: true,
			speed: 300,
			slidesToScroll: 1,
			fade: false,
			swipe: true,
			variableWidth: true,
			focusOnSelect: false,
			centerMode: true,
			slidesToShow: 1,
			arrows: false,
		};
	var videoHeight = jQuery('.actual-video').height();
	var jumbotronHeight = jQuery('.jumbotron').height();

	jQuery('.actual-video').css('top', (jumbotronHeight - videoHeight) );
	
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

	if (jQuery(window).width() < 992) {
		gallerySlick.slick(gallerySettings);
	}

	if(jQuery('.rellax').length > 0){
		var rellax = new Rellax('.rellax');
	}

	jQuery(window).on('resize', function() {

		var videoHeight = jQuery('.actual-video').height();
		var jumbotronHeight = jQuery('.jumbotron').height();

		jQuery('.actual-video').css('top', (jumbotronHeight - videoHeight) );

		// If viewport is 992px or larger, then unslick
		if (jQuery(window).width() > 992) {
			if (gallerySlick.hasClass('slick-initialized')) {
				gallerySlick.slick('unslick');
			}
			return;
		}

		// If not initialized, initialize
		if (!gallerySlick.hasClass('slick-initialized')) {
			return gallerySlick.slick(gallerySettings);
		}
	});

	jQuery('a[href$="#cases"]').click(function(e){
		e.preventDefault();
		jQuery('#overlay-teamleden').fadeOut(FadeSpeed);
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
		jQuery('#overlay-cases').fadeOut(FadeSpeed);
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
		focusOnSelect: false,
	});

	jQuery('.contributors-list').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToScroll: 2,
		slidesToShow: 3,
		fade: false,
		swipe: true,
		focusOnSelect: false,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					centerMode: true,
					slidesToShow: 1,
					variableWidth: true,
				}
			},
		],
	});

	jQuery('.employee-cases-list').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 3,
		fade: false,
		swipe: true,
		variableWidth: true,
		focusOnSelect: false,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					centerMode: true,
					slidesToShow: 1,
				}
			},
		],
	});

	jQuery('.coworkers-list').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 3,
		fade: false,
		swipe: true,
		variableWidth: true,
		focusOnSelect: false,
	});

	jQuery('.related-list').slick({
		dots: false,
		arrows: true,
		infinite: true,
		speed: 300,
		slidesToScroll: 1,
		fade: false,
		swipe: true,
		variableWidth: true,
		focusOnSelect: false,
	});

	jQuery('.company-brands').slick({
		dots: true,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 1,
		fade: true,
		adaptiveHeight: true,
		focusOnSelect: false,
		autoplay: true,
		autoplaySpeed: 4000,
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

	var QNR_VIDEO_SCREEN = {};
	(function(){
		QNR_VIDEO_SCREEN.videoScreensL = [];
		QNR_VIDEO_SCREEN.videoScreenObjectsL = [];

		function VideoScreen() {
			this.object = null; // The embedded YouTube/Vimeo iFrame
			this.wrap   = null; // DIV to wrap the iFrame, with bg img
			this.video  = null; // DIV to hold the iFrame in the wrap, sized
		}
		VideoScreen.prototype.initialize = function() {
			//Wrap the video iFrame
			var vFp = this.object.parentNode;
			this.wrap = document.createElement("div");
			this.wrap.className="qnr-video-screen";
			this.video = document.createElement("div");
			this.video.className="qnr-video-block qnr-video-center";
			this.video.appendChild(vFp.removeChild(this.object));
			this.wrap.appendChild(this.video);
			vFp.appendChild(this.wrap);
			// Size the object to computer display
			this.reset();
		};
		VideoScreen.prototype.reset = function() {
			// Computer image is 16/11 proportions
			// Computer screen is 1056/681 proportions
			var oW = this.wrap.offsetWidth;
			var oH = this.wrap.offsetHeight;
			var vW = Math.min(oW, oH * (16/11));
			var vH = vW * (681/1056);
			this.video.style.width = vW * 0.67 + "px";
			this.video.style.height = vH * 0.67 + "px";
			this.video.style.marginTop = "-" + (vH * 0.042) + "px";
		};
		window.addEventListener("load", function(event){
			QNR_VIDEO_SCREEN.videoScreensL = document.getElementsByClassName("qnr-computer-video");
			if (QNR_VIDEO_SCREEN.videoScreensL.length > 0) {
				for (var i = 0; i < QNR_VIDEO_SCREEN.videoScreensL.length; i++) {
					// Create a data- id attribute on the video screen
					QNR_VIDEO_SCREEN.videoScreensL[i].dataset.qnrVideoScreenId = i;
					// Create a new JS object for the the video screen
					QNR_VIDEO_SCREEN.videoScreenObjectsL.push(new VideoScreen());
					QNR_VIDEO_SCREEN.videoScreenObjectsL[i].object = QNR_VIDEO_SCREEN.videoScreensL[i];
					// Initialize object
					QNR_VIDEO_SCREEN.videoScreenObjectsL[i].initialize();
				}
			}
		}, false);
		window.addEventListener("resize", function(event) {
			if (document.getElementsByClassName("qnr-video-screen")[0]) {
				for (var i = 0; i < QNR_VIDEO_SCREEN.videoScreenObjectsL.length; i++) {
					QNR_VIDEO_SCREEN.videoScreenObjectsL[i].reset();
				}
			}
		}, false);
	})();

});