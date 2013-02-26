$(document).ready(function() {

// fonte do google para as paginas de sistema
 WebFontConfig = {google: { families: [ 'Libre+Baskerville:400,700,400italic:latin' ] }}; (function() {var wf = document.createElement('script'); wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'; wf.type = 'text/javascript'; wf.async = 'true'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wf, s);})();
// end fonte do google para as paginas de sistema


	$("body.checkout .searchWrapper:last, body.minha-conta .searchWrapper:last, body.fale-conosco .searchWrapper:last, body.sku .searchWrapper:last").addClass('bottomSearchWrapper');

	if ($("body").attr("class") == "carrinho")
	{
		$("iframe").attr( "scrolling", "no");
		$("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
		$("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");

		$("a.thickbox.tbstarted").click ( function ()
		{
			$("iframe").attr( "scrolling", "no");
			$("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
			$("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");
		});

		if ( $.browser.safari )
		{
			$("iframe").parent().css({ "width" : "600px", "height" : "400px", "overflow" : "hidden" });
			$("iframe").css({ "width" : "600px", "height" : "450px", "overflow" : "hidden" });
		}

		$('#ctl00_Conteudo_lnkContinuarCompra3').click(function(e) {
			e.preventDefault();
			document.location.href='/';
		});
	};

	if ($("body").attr("class") == "checkout")
	{
		$("iframe").attr( "scrolling", "no");
		$("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
		$("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");

		$("a.thickbox.tbstarted").click ( function ()
		{
			$("iframe").attr( "scrolling", "no");
			$("iframe").attr( "style", "overflow : hidden; width : 640px; height : 400px;");
			$("iframe").parent().attr( "style", "overflow : visible; width : 640px; height : 400px;");
		});

		if ( $.browser.safari )
		{
			$("iframe").parent().css({ "width" : "600px", "height" : "400px", "overflow" : "hidden" });
			$("iframe").css({ "width" : "600px", "height" : "450px", "overflow" : "hidden" });
		}
	};

	if ($("body").hasClass("finaliza-compra")) {
		$('body').append('<script type="text/javascript">/* <![CDATA[ */var google_conversion_id = 992685456; var google_conversion_language = "en"; var google_conversion_format = "2"; var google_conversion_color = "ffffff"; var google_conversion_label = "tM_uCKDPnAQQkNus2QM"; var totalValue = $("#totalAmount").text(); var google_conversion_value = totalValue; /* ]]> */ </script> <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"></script><noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/992685456/?value=0&amp;label=tM_uCKDPnAQQkNus2QM&amp;guid=ON&amp;script=0"/></div></noscript>')
	}


	if ($("body").hasClass("endereco-compra")) {
		$(".address-list li.editar a").text("Editar endereço");
	}

});