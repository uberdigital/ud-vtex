jQuery(document).ready(function($) {
	$('.resgata-numero-pecas').load('/no-cache/QuantidadeItensCarrinho.aspx .amount-items-em');

	/* SUBMENU */
	$('.start-drop').mouseover(function() {
		var _this = $(this);
		_this.find('.submenu').show();

		_this.mouseout(function() {
			_this.find('.submenu').hide();
		});
	});
	/* end SUBMENU */

	if ($("body").attr("class") == "resultado-busca") {
		$("h5:contains('Marca')").hide();
		$("h5:contains('Marca') + ul").hide();
	}
});