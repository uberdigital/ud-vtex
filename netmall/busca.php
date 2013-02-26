<div class="wrapper cleafix">
	<!-- vtex:contentPlaceHolder id="bannerDiferenciais" /-->
	<?php include("subtemplates/banners-diferenciais.php") ?>
	<!-- end vtex:contentPlaceHolder id="bannerDiferenciais" /-->

	<div class="container-resultado-busca clearfix">
		<div class="sidebar-busca-categoria">
			<h2 class="titulo-sidebar archivo">Refinar busca</h2>
			<div class="navigation">
				<div class="menu-departamento">
					<span class="rt"></span><span class="rb"></span>
					<div class="search-single-navigator" style="display: block;">
						<h3 class="roupas"><span></span><a href="http://develop-netmall.vtexcommerce.com.br/roupas" title="ROUPAS">Roupas masculinas</a></h3>
						<ul class="roupas">
							<li><a href="http://develop-netmall.vtexcommerce.com.br/roupas/blusas/" title="BLUSAS">Blusas (1)</a></li>
							<li><a href="http://develop-netmall.vtexcommerce.com.br/roupas/vestidos/" title="VESTIDOS">Vestidos (1)</a></li>
							<li class="last"><a href="http://develop-netmall.vtexcommerce.com.br/roupas/calcas/" title="CAL&Ccedil;AS">Calças (1)</a></li>
						</ul>
						<h3 class="roupas"><span></span><a href="http://develop-netmall.vtexcommerce.com.br/roupas" title="ROUPAS">Roupas femininas</a></h3>
						<ul class="roupas">
							<li><a href="http://develop-netmall.vtexcommerce.com.br/roupas/blusas/" title="BLUSAS">Blusas (1)</a></li>
							<li><a href="http://develop-netmall.vtexcommerce.com.br/roupas/vestidos/" title="VESTIDOS">Vestidos (1)</a></li>
							<li class="last"><a href="http://develop-netmall.vtexcommerce.com.br/roupas/calcas/" title="CAL&Ccedil;AS">Calças (1)</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- end sidebar-filtro -->

		<div class="wrapper-resultado-busca">
			<div class="wrapper-breadcrumb clearfix">
				<!-- vtex.cmc:breadCrumb /-->
				<div class="bread-crumb">
					<ul>
						<li><a title="NetMall" href="http://develop-netmall.vtexcommerce.com.br/">NetMall</a></li>
						<li class="last"><strong><a title="teste" href="http://develop-netmall.vtexcommerce.com.br/busca/?ft=teste&amp;PS=24">Busca: teste</a>  </strong></li>
					</ul>
				</div>
				<!-- end vtex.cmc:breadCrumb /-->
			</div><!-- end wrapper-breadcrumb -->

			<div class="main">
				<p class="searchResultsTime">Produtos encontrados: 4<span class="resultado-busca-tempo"> em 8 ms</span></p>
				<div class="sub">
					<div class="resultado-busca-filtro">
						<fieldset class="orderBy">
							<label>Ordenar por:</label>
							<select id="O" onchange="window.location.href= 'http://develop-netmall.vtexcommerce.com.br/busca/?PS=24' + '&amp;O=' + this.options[this.selectedIndex].value">
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
							<select id="PS" onchange="window.location.href= '' + '&amp;PS=' + this.options[this.selectedIndex].value">
								<option selected="selected" value="24">24</option>
								<option value="48">48</option>
								<option value="72">72</option>
								<option value="96">96</option>
							</select>
						</fieldset>
						<p class="compare">Produtos selecionados para comparar: <strong><span class="compare-selection-count" id="NumeroSuperior">0</span></strong><a title="Comparar" class="btn-comparar" href="#">Comparar</a></p>
					</div>
				</div>
				<div class="vitrine resultItemsWrapper">
					<script type="text/javascript" language="javascript">
						var pagecount_c8e7a04e12c1474ca7416e34deb64c48;
						$(document).ready(function() {
						    pagecount_c8e7a04e12c1474ca7416e34deb64c48 = 1
						    $("#PagerTop_c8e7a04e12c1474ca7416e34deb64c48").pager({pagenumber:1, pagecount: pagecount_c8e7a04e12c1474ca7416e34deb64c48, buttonClickCallback: PageClick_c8e7a04e12c1474ca7416e34deb64c48 });
						    $("#PagerBottom_c8e7a04e12c1474ca7416e34deb64c48").pager({pagenumber:1, pagecount: pagecount_c8e7a04e12c1474ca7416e34deb64c48, buttonClickCallback: PageClick_c8e7a04e12c1474ca7416e34deb64c48 });
						if(window.location.hash != "")PageClick_c8e7a04e12c1474ca7416e34deb64c48(window.location.hash.replace(/\#/, ""));
						});
						PageClick_c8e7a04e12c1474ca7416e34deb64c48 = function(pageclickednumber) {
						    window.location.hash =  pageclickednumber;
						    $("#ResultItems_c8e7a04e12c1474ca7416e34deb64c48").load("/buscapagina?PS=24&sl=336f9b54-4681-49c2-85b5-c6524e25e92d&cc=3&sm=0&PageNumber=" + pageclickednumber,
						    function(){
						        $("#PagerTop_c8e7a04e12c1474ca7416e34deb64c48").pager({ pagenumber: pageclickednumber, pagecount: pagecount_c8e7a04e12c1474ca7416e34deb64c48, buttonClickCallback: PageClick_c8e7a04e12c1474ca7416e34deb64c48 });
						        $("#PagerBottom_c8e7a04e12c1474ca7416e34deb64c48").pager({ pagenumber: pageclickednumber, pagecount: pagecount_c8e7a04e12c1474ca7416e34deb64c48, buttonClickCallback: PageClick_c8e7a04e12c1474ca7416e34deb64c48 });
						        bindQuickView();
						    });
						}
					</script>
					<div class="pager top" id="PagerTop_c8e7a04e12c1474ca7416e34deb64c48">
						<ul class="pages">
							<li class="first pgEmpty">primeiro</li>
							<li class="previous pgEmpty">anterior</li>
							<li class="page-number pgCurrent">1</li>
							<li class="page-number">2</li>
							<li class="page-number">3</li>
							<li class="page-number">4</li>
							<li class="page-number">5</li>
							<li class="next pgEmpty">próximo</li>
							<li class="last pgEmpty">último</li>
						</ul>
					</div>
					<div id="ResultItems_c8e7a04e12c1474ca7416e34deb64c48" class="prateleira resultadoBusca">
						<div class="prateleira resultadoBusca n3colunas">
							<ul>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca1.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca2.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas last">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca3.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
							</ul>
							<ul>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca3.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca1.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas last">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca2.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
							</ul>
							<ul>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca2.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca1.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas last">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca3.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
							</ul>
							<ul>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca3.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca1.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
								<li class="roupas last">
									<div class="imgProduto"><a href="#"><img src="./arquivos/fake-produto-busca2.jpg" width="190" height="260" alt="074"></a></div>
									<div class="containerDescProd">
									<div class="prodName"><a href="http://develop-netmall.vtexcommerce.com.br/TSHIRT_TESTE/p">Nome do produto Teste</a></div>
									<div class="prodDesc"><a href="#"><p class="texto brand hostel">hostel</p></a></div>
									<div class="prodPrice">
										<span class="valueProd">R$ 50,00</span>
									</div>
									</div><!-- containerDescProd -->
									ou <span class="quantidade-parcela">3x</span> de <span class="valor-parcela">R$ 16,66</span>
									<p></p>
								</li>
							</ul>
						</div>
					</div>
					<div class="pager bottom" id="PagerBottom_c8e7a04e12c1474ca7416e34deb64c48">
						<ul class="pages">
							<li class="first pgEmpty">primeiro</li>
							<li class="previous pgEmpty">anterior</li>
							<li class="page-number pgCurrent">1</li>
							<li class="page-number">2</li>
							<li class="page-number">3</li>
							<li class="page-number">4</li>
							<li class="page-number">5</li>
							<li class="next pgEmpty">próximo</li>
							<li class="last pgEmpty">último</li>
						</ul>
					</div>
				</div>
				<p class="searchResultsTime">Produtos encontrados: 4<span class="resultado-busca-tempo"> em 8 ms</span></p>
				<div class="sub">
					<div class="resultado-busca-filtro">
						<fieldset class="orderBy">
							<label>Ordenar por:</label>
							<select id="O" onchange="window.location.href= 'http://develop-netmall.vtexcommerce.com.br/busca/?PS=24' + '&amp;O=' + this.options[this.selectedIndex].value">
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
							<select id="PS" onchange="window.location.href= '' + '&amp;PS=' + this.options[this.selectedIndex].value">
								<option selected="selected" value="24">24</option>
								<option value="48">48</option>
								<option value="72">72</option>
								<option value="96">96</option>
							</select>
						</fieldset>
						<p class="compare">Produtos selecionados para comparar: <strong><span class="compare-selection-count" id="NumeroSuperior">0</span></strong><a title="Comparar" class="btn-comparar" href="#">Comparar</a></p>
					</div>
				</div>
			</div>
		</div><!-- end wrapper-resultado-busca -->
	</div><!-- end container-resultado-busca -->

</div>