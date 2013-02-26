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
	<link rel="stylesheet" type="text/css" href="./arquivos/css-zussen-busca.css" />
</head>

<body class="resultado-busca">	
	<div class="container-general">
		<?php include 'includes/header.php'; ?>

		<div class="container-main clearfix">
			<div class="filter-column">
				<!-- vtex.cmc:searchNavigator /-->
				<div class="menu-departamento">
					<span class="rt"></span>
					<span class="rb"></span>
					<div>
						<div class="menu-navegue">
							<a title="Navegue" class="search-navigator-tab tab-navegue-ativo" href="#">Navegue</a>
							<a title="Refinar Resultado" class="search-navigator-tab tab-refinar" href="#">Refinar Resultado</a>
						</div>

						<div class="search-multiple-navigator" style="display: none;">
							<h3 class="roupas">
								<span></span>
								<a href="http://www.netmall.com.br/roupas" title="ROUPAS">ROUPAS</a>
							</h3>

							<h4 class="roupas">
								<span></span>
								<a href="http://www.netmall.com.br/roupas" title="CALÇAS">CALÇAS</a>
							</h4>
							
							<a title="Refinar Resultado" class="bt-refinar search-filter-button even" href="#">Refinar Resultado</a>
							<fieldset class="refino even">
								<h5 class="  even">GÊNERO</h5>
								<div class="">
									<label>masculino</label>
									<a href="http://www.netmall.com.br/roupas/calcas/" class="ver-filtros">Veja todas opções</a>
								</div>
							</fieldset>

							<fieldset class="refino even">
								<h5 class="even">COR PREDOMINANTE</h5>
								<div class="">
									<label><input rel="fq=spec_fct_16:AZUL" class="multi-search-checkbox" type="checkbox" name="AZUL" value="AZUL">AZUL (16)</label>
									<label><input rel="fq=spec_fct_16:PRETO" class="multi-search-checkbox" type="checkbox" name="PRETO" value="PRETO">PRETO (3)</label>
									<label><input rel="fq=spec_fct_16:CINZA" class="multi-search-checkbox" type="checkbox" name="CINZA" value="CINZA">CINZA (4)</label>
								</div>
							</fieldset>

							<fieldset class="refino">
								<h5 class=" ">TAMANHO</h5>
								<div class="">
									<label><input rel="fq=spec_fct_19:36" class="multi-search-checkbox" type="checkbox" name="36" value="36">36 (3)</label>
									<label><input rel="fq=spec_fct_19:38" class="multi-search-checkbox" type="checkbox" name="38" value="38">38 (12)</label>
									<label><input rel="fq=spec_fct_19:40" class="multi-search-checkbox" type="checkbox" name="40" value="40">40 (13)</label>
									<label><input rel="fq=spec_fct_19:42" class="multi-search-checkbox" type="checkbox" name="42" value="42">42 (21)</label>
									<label><input rel="fq=spec_fct_19:44" class="multi-search-checkbox" type="checkbox" name="44" value="44">44 (13)</label>
									<label><input rel="fq=spec_fct_19:46" class="multi-search-checkbox" type="checkbox" name="46" value="46">46 (14)</label>
									<label><input rel="fq=spec_fct_19:48" class="multi-search-checkbox" type="checkbox" name="48" value="48">48 (4)</label>
								</div>
							</fieldset>

							<fieldset class="refino">
								<h5 class=" ">Faixa de Preço</h5>
								<div class="">
									<label><input rel="fq=P:%5b50.01+TO+100%5d" class="multi-search-checkbox" type="checkbox" name="%5b50.01+TO+100%5d" value="[50.01 TO 100]">De R$ 50,01 até 100,00 (22)</label>
									<label><input rel="fq=P:%5b100.01+TO+150%5d" class="multi-search-checkbox" type="checkbox" name="%5b100.01+TO+150%5d" value="[100.01 TO 150]">De R$ 100,01 até 150,00 (1)</label>
								</div>
							</fieldset>
						</div>

						<div class="search-single-navigator" style="display: block;">
							<h3 class="roupas">
							<span></span>
							<a href="http://www.netmall.com.br/roupas" title="ROUPAS">ROUPAS</a></h3>
							<h4 class="roupas even">
								<a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;PS=24" title="CALÇAS">CALÇAS (23)</a>
							</h4>
							
							<h5 class="">GÊNERO</h5>
								<ul class="">
									<li class="filtro-ativo">masculino</li>
									<a href="http://www.netmall.com.br/roupas/calcas/" class="ver-filtros">Veja todas opções</a>
								</ul>

							<h5 class="Hide">COR PREDOMINANTE</h5>
							<ul class="COR PREDOMINANTE ">
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_16:AZUL&amp;PS=24" title="AZUL">AZUL (16)</a></li>
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_16:PRETO&amp;PS=24" title="PRETO">PRETO (3)</a></li>
								<li class="last"><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_16:CINZA&amp;PS=24" title="CINZA">CINZA (4)</a></li>
							</ul>

							<h5 class="Hide even">TAMANHO</h5>
							<ul class="TAMANHO even">
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:36&amp;PS=24" title="36">36 (3)</a></li>
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:38&amp;PS=24" title="38">38 (12)</a></li>
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:40&amp;PS=24" title="40">40 (13)</a></li>
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:42&amp;PS=24" title="42">42 (21)</a></li>
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:44&amp;PS=24" title="44">44 (13)</a></li>
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:46&amp;PS=24" title="46">46 (14)</a></li>
								<li class="last"><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=spec_fct_19:48&amp;PS=24" title="48">48 (4)</a></li>
							</ul>

							<h5 class="Hide even">Faixa de Preço</h5>
							<ul class="Faixa de Preço  even">
								<li><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=P:[50.01+TO+100]&amp;PS=24" title="De R$ 50,01 até 100,00">De R$ 50,01 até 100,00 (22)</a></li>
								<li class="last"><a href="http://www.netmall.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;fq=P:[100.01+TO+150]&amp;PS=24" title="De R$ 100,01 até 150,00">De R$ 100,01 até 150,00 (1)</a></li>
							</ul>
						</div>
					</div>
				</div><!-- end search navigator -->
			</div><!-- end filter-column -->

			<div class="container-search-result">
				<!-- vtex:contentPlaceHolder id="searchResult" / -->
				<div class="sub">
					<div class="sub">
						<div class="resultado-busca-filtro">
							<fieldset class="orderBy">
								<label>Ordenar por:</label>
								<select id="O" onchange="window.location.href= 'http://develop-netmall.vtexcommerce.com.br/busca/?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/&amp;PS=24' + '&amp;O=' + this.options[this.selectedIndex].value">
									<option value="">Selecione</option>
									<option value="OrderByPriceASC">Menor Preço</option>
									<option value="OrderByPriceDESC">Maior Preço</option>
									<option value="OrderByTopSaleDESC">Mais Vendidos</option>
									<option value="OrderByReviewRateDESC">Mais bem Avaliados</option>
									<option value="OrderByNameASC">A - Z</option>
									<option value="OrderByNameDESC">Z - A</option>
									<option value="OrderByReleaseDateDESC">Data de Lançamento</option>
									<option value="OrderBySalePriceDESC">Desconto %</option>
								</select>
							</fieldset>
							
							<fieldset class="filterBy">
								Itens por página:
								<select id="PS" onchange="window.location.href= '?fq=spec_fct_18:masculino&amp;fq=C:1000001/1000005/' + '&amp;PS=' + this.options[this.selectedIndex].value">
								<option selected="selected" value="24">24</option>
								<option value="48">48</option>
								<option value="72">72</option>
								<option value="96">96</option>
								</select>
							</fieldset>
							<p class="compare">Produtos selecionados para comparar: 
								<strong><span class="compare-selection-count" id="NumeroSuperior">0</span></strong>
								<a title="Comparar" class="btn-comparar" href="#">Comparar</a>
							</p>
						</div>
					</div>
				</div><!-- end sub -->

				<div class="vitrine resultItemsWrapper">

					<ul class="list-products clearfix">
						<li class="product">
							<div class="image-product">
								<img src="arquivos/fake-product1.jpg" alt="Produto Número 1" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 1</span>
								<span class="product-price">R$ 250,00</span>
							</div><!-- end desc-produtct -->
						</li>
						<li class="product">
							<div class="image-product">
								<img src="arquivos/fake-product2.jpg" alt="Produto Número 2" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 2</span>
								<span class="product-price">R$ 330,00</span>
							</div><!-- end desc-produtct -->
						</li>
						<li class="product">
							<div class="image-product">
								<img src="arquivos/fake-product3.jpg" alt="Produto Número 3" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 3</span>
								<span class="product-price">R$ 230,00</span>
							</div><!-- end desc-produtct -->
						</li>
						<li class="product last">
							<div class="image-product">
								<img src="arquivos/fake-product5.jpg" alt="Produto Número 5" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 5</span>
								<span class="product-price">R$ 190,00</span>
							</div><!-- end desc-produtct -->
						</li>
					</ul>

					<ul class="list-products clearfix">
						<li class="product">
							<div class="image-product">
								<img src="arquivos/fake-product1.jpg" alt="Produto Número 1" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 1</span>
								<span class="product-price">R$ 250,00</span>
							</div><!-- end desc-produtct -->
						</li>
						<li class="product">
							<div class="image-product">
								<img src="arquivos/fake-product2.jpg" alt="Produto Número 2" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 2</span>
								<span class="product-price">R$ 330,00</span>
							</div><!-- end desc-produtct -->
						</li>
						<li class="product">
							<div class="image-product">
								<img src="arquivos/fake-product3.jpg" alt="Produto Número 3" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 3</span>
								<span class="product-price">R$ 230,00</span>
							</div><!-- end desc-produtct -->
						</li>
						<li class="product last">
							<div class="image-product">
								<img src="arquivos/fake-product5.jpg" alt="Produto Número 5" />
							</div>
							<div class="desc-product">
								<span class="product-name">Produto Número 5</span>
								<span class="product-price">R$ 190,00</span>
							</div><!-- end desc-produtct -->
						</li>
					</ul>
				</div><!-- end vitrine.resultItemsWrapper -->

			</div><!-- end container-search-result -->
		</div><!-- end container-main -->

		<?php include 'includes/footer.php'; ?>
	</div><!-- end container-general -->
</body>
</html>