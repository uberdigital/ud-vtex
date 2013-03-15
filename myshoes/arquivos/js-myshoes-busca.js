$(function() {
	var linksFiltro = $(".sidebar-busca-categoria a");
	$(linksFiltro).html(function(i, html) {
	    return html.replace(/ \(\d*\)/, "");
	});

	var linksInline = $(":header:contains('Tamanhos') + ul");
	$(linksInline).addClass('lista-inline tamanhos clearfix');

	var listaCores = $(":header:contains('Cores') + ul");
	$(listaCores).addClass('lista-cores clearfix');

	var linksCores = $(":header:contains('Cores') + ul li a");
	$(linksCores).each(function(){var corLista = $(this).attr('title').toLowerCase(); $(this).parent().addClass(corLista)});
});