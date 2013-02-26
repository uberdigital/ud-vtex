$(function() {
	// REMOVE E INSERE PALAVRA NO CAMPO DE BUSCA 

	$('.fulltext-search-box').val(' ');

	$('.fulltext-search-box').focus(function() {
		if ($(this).val() == ' ') {
			$(this).addClass('noBg');
		}
	});
	$('.fulltext-search-box').blur(function() {
		if ($(this).val() == ' ') {
			$(this).removeClass('noBg');
			$(this).val(' ');
		}
	});

	// MENU DROP-DOWN DE PRODUTOS
	$('.start-drop').mouseover(function() {
		var _this = $(this);
		_this.find('.drop-container').show();

		_this.mouseout(function() {
			_this.find('.drop-container').hide();
		});
	});
});