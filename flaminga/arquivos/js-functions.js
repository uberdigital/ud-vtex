$(function() {
	// Banner Central Home
	if ($('#bannerSuperDestaque').length > 0) {
		$('#bannerSuperDestaque')
		.cycle({
			fx: 		'fade',
			speed: 	'slow',
			timeout: 	6000,
			pause: 	1,
			pager: 	'#paginacaoBanner'
		});
	}

	if ($('#carrosselDestaques ul').length > 0) {
		$('#carrosselDestaques ul').carouFredSel({
			auto: 	false,
			infinite: true,
			scroll: 	3,
			width: 	'100%',
			prev: 	'#prev5',
			next: 	'#next5'
		});
	}

	if ($('p.welcome').length > 0) {
		$('p.welcome').html('<a href="/Vitrine/MinhaConta/MinhaConta.aspx">Login</a>')
		$('p.welcome').show();
	}
});