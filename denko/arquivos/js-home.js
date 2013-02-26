jQuery(document).ready(function($) {
	$('#carouselProducts ul').carouFredSel({
		auto: 		false,
		circular: 	false,
		infinite: 	false,
		prev: 		'#btn-prev-carousel',
		next: 		'#btn-next-carousel',
		pagination: "#pagerCarousel",
		width: 		'940px'
	});

	$('#carouselProducts .pager-carousel a span').html('');

	$('#carouselVideos').carouFredSel({
		auto: 		false,
		align       : "center",
		circular: 	false,
		infinite: 	false,
		prev: 		'#btn-prev-carousel2',
		next: 		'#btn-next-carousel2',
		width: 		'780px'
	});
});