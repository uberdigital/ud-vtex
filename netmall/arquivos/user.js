$(document).ready(function() {
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
		$('.txtFinalizacao').before('<div style="margin:20px auto; width:468px;"><a href="https://www.ebitempresa.com.br/bitrate/pesquisa1.asp?empresa=1307605"><img border="0" name="banner" src="https://www.ebitempresa.com.br/bitrate/banners/b1307605.gif" alt="O que você achou desta loja?" width="468" height="60"></a></div>');
		$('body').append('<script type="text/javascript"> /* <![CDATA[ */ var google_conversion_id = 945271616; var google_conversion_language = "pt"; var google_conversion_format = "2"; var google_conversion_color = "ffffff"; var google_conversion_label = "v8hOCMDI8AMQwObewgM"; var totalValue = $("#totalAmount").text(); var google_conversion_value = totalValue; /* ]]> */ </script> <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"> </script> <noscript> <div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/945271616/?value=%3C%25%3D%20totalValue%20%25%3E&amp;label=v8hOCMDI8AMQwObewgM&amp;guid=ON&amp;script=0"/> </div> </noscript>')
	}

	if ($("body").attr("class") == "carrinho") {
		$('#ctl00_Conteudo_fieldsetCEP legend span').html('Calcular frete<br /><small>Digite aqui seu CEP:</small>')
		$('table.carrinhoTable thead td.excluir').html('Remover item');
		$('body').append('<div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/945271616/?value=0&amp;label=V6KSCMjM9QMQwObewgM&amp;guid=ON&amp;script=0" /> </div>');
	}
});