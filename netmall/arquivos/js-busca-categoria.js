$(function() {
	if ($(":header:contains('TAMANHO')").length > 0) {

		if ($('body').hasClass('busca')) {
			$(".search-single-navigator :header:contains('TAMANHO')").next().clone().appendTo('#container-tamanhos-topo');
		}

		else {
			$(":header:contains('TAMANHO')").next().clone().appendTo('#container-tamanhos-topo');				
		}

		var trataLista = $('#container-tamanhos-topo ul li a');
		$(trataLista).html(function(i, html) {
			return html.replace(/ \(\d*\)/, "");
		});

		$('#container-tamanhos-topo').show();
	}
});