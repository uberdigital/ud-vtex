jQuery(document).ready(function($) {
	var linksFiltro = $(".wrapper-filter a");

	$(linksFiltro).html(function(i, html) {
	    return html.replace(/ \(\d*\)/, "");
	});

	$(linksFiltro).show();

	var termoBusca = window.vtxctx.seachTerm;
});