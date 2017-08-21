jQuery(document).ready(function(){
	jQuery('.quotes-list').slick({
		dots: true,
		arrows: false,
		infinite: false,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 1,
		fade: true,
		adaptiveHeight: true,
	});
	jQuery('.teamleden-list').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToScroll: 1,
		slidesToShow: 3,
		fade: false,
	});
});