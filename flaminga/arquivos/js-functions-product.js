// Se for exibir combo com SKUs, adiciona titulo
function verificaModelos() {
	if ($("#espec_").length > 0){
		var listModelos = $('#espec_');
			listModelos.before('<span class="titleDesc">Cores / Estampas</span>');
	}
}

$(document).ready(function() {
	// Adicionando classes necessarias
	$('#show').addClass('clearfix');
	$('#show .thumbs').addClass('listaFotos');


	/* zoom flaminga */
	var fotosProduto = $('#show .thumbs li a img');
	$(fotosProduto).live('click', function(e){
		e.preventDefault();
		//$(fotosProduto).toggle();
		$('.toHide').toggle();
		$(this).toggleClass('zoom-fotos');
	});


	// // Remove texto Por do preco
	// $('.valor-por:contains("Por: ")').html(function(i, h) {
	//   return h.replace(/Por: /g, '');
	// });

	$("#descricao-abas").tabs().show();

	//	Fuild layout example 2, centering the items
	$('#carrosselRelacionados ul').carouFredSel({
		auto: 	false,
		infinite: true,
		scroll: 	3,
		width: 	'100%',
		prev: 	'#prev5',
		next: 	'#next5'
	});

	verificaModelos();

	if ($('p.welcome').length > 0) {
		$('p.welcome').html('<a href="/Vitrine/MinhaConta/MinhaConta.aspx">Login</a>')
		$('p.welcome').show();
	}

	var urlProduto = document.location.href;
	var pinnarRoot = document.location.hostname;
	var pinnarImg = $('.thumbs.listaFotos li:nth-child(3) img').attr('src');
	$('li.pinterest').html('<a target="_blank" href="http://pinterest.com/pin/create/button/?url='+urlProduto+'&media=http://'+pinnarRoot+pinnarImg+'&description=Loja%20virtual%20voltada%20para%20o%20p%C3%BAblico%20plus-size%20feminino%2C%20com%20marcas%20top%20de%20linha%2C%20muita%20qualidade%2C%20sofistica%C3%A7%C3%A3o%20e%20beleza.%20Confira%20nossos%20lan%C3%A7amentos!" class="pin-it-button" count-layout="none"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>');

	$('.containerAvaliacao').html('<div class="fb-comments" data-href="'+urlProduto+'"data-width="990" data-num-posts="15"></div>');

    var verifica = $.cookie('cadastrado');
    if (verifica == 'sim') {
        $('<div class="links-medidas"><a id="startMedidas" class="iframe fancybox" href="/minhas-medidas/modal-mostrar-medidas">Acesse suas medidas</a></div>').appendTo('#b');
		$("#startMedidas").fancybox({
				'width'				: '90%',
				'height'			: '90%',
				'autoScale'			: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
    }

});