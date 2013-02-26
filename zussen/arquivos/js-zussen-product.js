jQuery(document).ready(function($) {
	$('.thumbs').addClass('clearfix');
	$('.thumbs li:last-child').addClass('last');

	var numeroParcelas = $('.skuBestInstallmentNumber').text();
	$('.valor-dividido').text(' ou até '+numeroParcelas+'x sem juros');
	$('.product-price-container').show();

});

window.scrollTo(0, 500);