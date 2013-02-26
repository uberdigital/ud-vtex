$(function() {

	function MM_openBrWindow(theURL,winName,features) { //v2.0
	  window.open(theURL,winName,features);
	}

	$('#btnChatOnline').click(function(e){
		e.preventDefault();
		MM_openBrWindow('https://netmall.webchatlw.com.br/clients/start','','width=535,height=635')
	});

	if ($('.amount-items-em').length > 0) {
		var quantidadeProdutos = parseInt($('.amount-items-em').text());
		if (quantidadeProdutos == 0) { $('#quantidadeProdutos').text('itens'); }
		else if (quantidadeProdutos == 1) { $('#quantidadeProdutos').text('item'); }
		else if (quantidadeProdutos > 1) { $('#quantidadeProdutos').text('itens'); }
	}
	// Banner Super Destaque Home

	if ($('#bannerSuperDestaque').length > 0) {
		$('#bannerSuperDestaque')
		.cycle({
			fx: 		'fade',
			speed: 	'fast',
			timeout: 	6000,
			pause: 	1,
			pager: 	'#paginacaoBanner'
		});
	}
	if ($("#carrossel1").length > 0){
		$('#carrossel1 ul').carouFredSel({
			auto: 	false,
			infinite: true,
			scroll: 	3,
			width: 	'100%',
			prev: 	'#btn-carrossel1-prev',
			next: 	'#btn-carrossel1-next'
		});
	}
	if ($("#carrossel2").length > 0){
		$('#carrossel2 ul').carouFredSel({
			auto: 	false,
			infinite: true,
			scroll: 	3,
			width: 	'100%',
			prev: 	'#btn-carrossel2-prev',
			next: 	'#btn-carrossel2-next'
		});
	}
	// terceiro carrossel opcional
	if ($("#carrossel3").length > 0){
		$('#carrossel3 ul').carouFredSel({
			auto: 	false,
			infinite: true,
			scroll: 	3,
			width: 	'100%',
			prev: 	'#btn-carrossel3-prev',
			next: 	'#btn-carrossel3-next'
		});
	}
	// end terceiro carrossel opcional
});

$('.start-drop').mouseover(function() {
	var _this = $(this);
	_this.find('.drop-container').show();

	_this.mouseout(function() {
		_this.find('.drop-container').hide();
	});
});