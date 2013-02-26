<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

	<!-- chamadas zussen =========================== -->
	<link rel="stylesheet" type="text/css" href="./arquivos/css-zussen-reset.css" />
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./arquivos/css-zussen-general.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="arquivos/js-zussen-functions.js"></script>
	<!-- end chamadas zussen ======================= -->

	<!-- chamada exclusiva da página -->
	<link rel="stylesheet" type="text/css" href="./arquivos/css-zussen-produto.css" />
	<script type="text/javascript" src="arquivos/js-zussen-product.js"></script>
</head>

<body>	
	<div class="container-general">
		<?php include 'includes/header.php'; ?>

		<div class="container-main">
			<div class="productName  Camisa-Laco-Branca">Camisa Laço Branca</div>

			<div class="container-product clearfix">
				<div class="images-column">
					<div class="apresentacao">
						<div id="setaThumbs" style="left: 241px;">
						</div>
						<div id="show">
							<div id="include">
								<div id="image" productindex="0">
									<img id="image-main" src="arquivos/fake-product-big.jpg" productindex="0" class="sku-rich-image-main" alt="Modelo A" title="Modelo A">
								</div>
							</div>
							<ul class="thumbs">
								<li>
									<a id="botaoZoom" href="#" title="Zoom" zoom="" class="ON">
									<img src="arquivos/fake-product-thumb.jpg" title="Modelo A"></a>
								</li>
								<li>
									<a id="botaoZoom" href="#" title="Zoom" zoom="" class="ON">
									<img src="arquivos/fake-product-thumb.jpg" title="Modelo B"></a>
								</li>
								<li>
									<a id="botaoZoom" href="#" title="Zoom" zoom="" class="ON">
									<img src="arquivos/fake-product-thumb.jpg" title="Modelo C"></a>
								</li>
							</ul>
						</div>
					</div>
				</div><!-- end images-column -->

				<div class="infos-column clearfix">
					<div class="info-columns-container clearfix">
						<div class="details-column">
							<div class="information-box first">
								<p class="title-box">Informações</p>
								<div class="productDescription">
									Camisa masculina de algodão com manga longa e estampa de pequenas 
									bolinhas e detalhe na cor jeans
								</div>
							</div>

							<div class="information-box">
								<ul class="topic Tamanho">
									<li class="specification">Tamanho</li>
									<li class="select skuList">
										<select id="espec_0_opcao_0" name="espec_0" size="1" class="sku-selector" specification="Tamanho" currentproductid="79">
											<option value=""></option>
											<option value="44" class="skuopcao_0">44</option>
											<option value="45" class="skuopcao_1">46</option>
											<option value="46" class="skuopcao_2">48</option>
										</select>
									</li>
								</ul>
							</div>

							<div class="information-box">
								<p class="title-box">Compartilhe</p>
								<!-- vtex.cmc:facebookLike /-->
							</div>
						</div><!-- details-column -->

						<div class="size-column">
							<div class="information-box first">
								<p class="title-box">Medidas</p>
								<p>
									<strong>Modelo Veste</strong><br />
									P
								</p>
								<p>
									<strong>Modelo Mede</strong><br />
									1,68m
								</p>
							</div><!-- end information-box -->

							<div class="information-box product-price-container">
								<p class="title-box">Valor</p>
								<p>
									<!--  Controle: preco do produto -->
									<p productindex="0" class="descricao-preco">
										<!-- <em productindex="0" class="valor-de" style="display:block">
											De: <strong productindex="0" class="skuListPrice">R$389,00</strong>
										</em> -->
										<em productindex="0" class="valor-por">
											<strong productindex="0" class="skuBestPrice">R$272,00</strong>
										</em>
										<em productindex="0" class="valor-dividido" style="display:block">
											<span><span>ou <label productindex="0" class="skuBestInstallmentNumber">5</label>X de</span> 
											<strong><label productindex="0" class="skuBestInstallmentValue">R$  54,40</label></strong>
										</span>
										</em>
									</p>
									<p productindex="0" class="preco-a-vista" style="display:none">Preço a vista:</p>
									<em productindex="0" class="economia-de">Economia de R$ 117,00</em>
									<p></p>
									<!-- /Controle: preco do produto -->
								</p>
							</div><!-- end information-box -->

							<div class="information-box">
								<!--  Controle: botao comprar -->
								<a class="buy-button" href="javascript:alert('Verificar o tamanho desejado')" style="display:block">Comprar</a>
								<p class="unavailable-button" style="display:none">Produto Esgotado</p>
								<input type="hidden" class="buy-button-amount" value="0">
								<div class="notifyme" style="display:none">
									<h3 class="notifymetitle">Produto esgotado</h3>
									<fieldset class="notifyme-form">
										<p>Para ser avisado da disponibilidade deste Produto, basta preencher os campos abaixo.</p>
										<input id="notifymeClientName" onfocus="notifymeSelect(this,'Digite seu nome...');" onblur="notifymeLeave(this,'Digite seu nome...');" class="notifyme-client-name" value="Digite seu nome..." size="20" type="text" name="notifymeClientName">
										<input id="notifymeClientEmail" onfocus="notifymeSelect(this,'Digite seu e-mail...');" onblur="notifymeLeave(this,'Digite seu e-mail...');" class="notifyme-client-email" value="Digite seu e-mail..." size="20" type="text" name="notifymeClientEmail">
										<input id="notifymeButtonOK" class="btn-ok notifyme-button-ok" value="ok" type="button" name="notifymeButtonOK">
										<input id="notifymeTitle" type="hidden" class="notifyme-title" value="Produto esgotado">
										<input id="notifymeLoading" type="hidden" class="notifyme-loading" value="Carregando...">
										<input id="notifymeSuccess" type="hidden" class="notifyme-success" value="Cadastrado com sucesso, assim que o produto for disponibilizado você receberá um email avisando.">
										<input id="notifymeError" type="hidden" class="notifyme-error" value="Não foi possível cadastrar. Tente mais tarde.">
										<input id="notifymeSkuId" type="hidden" class="notifyme-skuid" value="190">
									</fieldset>
								</div>
								<!-- /Controle: botao comprar -->
							</div>
						</div><!-- size-column -->
					</div><!-- end info-columns-container -->

					<div class="container-dica-zussen">
						<span class="title-dica">Dica Zussen</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Aliquam nunc risus, convallis eget mollis eget, molestie vitae nisl.</p>
					</div><!-- end container-dica-zussen -->

				</div><!-- end infos-column -->
			</div><!-- end container-product -->
		</div><!-- end container-main -->

		<?php include 'includes/footer.php'; ?>
	</div><!-- end container-general -->
</body>
</html>