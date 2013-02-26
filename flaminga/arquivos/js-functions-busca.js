jQuery(document).ready(function($) {
	// Adicionando classes necessarias
	$('.pages').addClass('clearfix');
	$('.n4colunas').addClass('clearfix');

	$('.navigation-tabs h3 a').attr('href', '#');

	var linksFiltro = $(".filterContainer a");

	$(linksFiltro).html(function(i, html) {
	    return html.replace(/ \(\d*\)/, "");
	});

	$(linksFiltro).show();

	$('.filterContainer').find('h5:contains("Tamanho")').hide().next().hide();

	if ($('p.welcome').length > 0) {
		$('p.welcome').html('<a href="/Vitrine/MinhaConta/MinhaConta.aspx">Login</a>')
		$('p.welcome').show();
	}

	$('.listaVitrine ul li').live('mouseover', function() {
		// caso exista imagem para o swap
		if($(this).find('.image-over a img').length) {
			var imgInicio = $(this).find('.image-inicial');
			var imgOver = $(this).find('.image-over');
			
			// aplique a troca
			$(imgInicio).css('display', 'none');
			$(imgOver).css('display', 'block');

			// no mouse out, voltar a primeira imagem
			$(this).mouseout(function(){
				$(imgInicio).css('display', 'block');
				$(imgOver).css('display', 'none');
			});
		};
	});

});