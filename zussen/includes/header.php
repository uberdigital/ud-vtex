<!-- vtex.cmc:AmountItemsInCart / -->
<div class="amount-items-in-cart">
	<div class="ajax-content-loader" rel="/no-cache/QuantidadeItensCarrinho.aspx">
		<div class="cartInfoWrapper">
			<span class="title">
				<span id="MostraTextoXml1">Resumo do Carrinho</span>
			</span>
			<ul class="cart-info">
				<li class="amount-products">
				<strong>
					<span id="MostraTextoXml2">Total de Produtos:</span></strong>
					<em class="amount-products-em">0</em>
				</li>
				<li class="amount-items">
					<strong><span id="MostraTextoXml3">Total de Itens:</span></strong> <em class="amount-items-em">0</em>
				</li>
				<li class="amount-kits">
					<strong><span id="MostraTextoXml4">Total de Kits:</span></strong> <em class="amount-kits-em">4</em>
				</li>
				<li class="total-cart">
					<strong><span id="MostraTextoXml5">Valor Total:</span></strong> <em class="total-cart-em">0,00</em>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- /Controle: valores do carrinho -->

<div id="header" class="header">
	<div class="container-top shadow-black clearfix">
		<div class="column-left">
			<div class="main-logo"><a href="/">Zussen</a></div>
		</div>

		<div class="column-right">
			<div class="main-infos">
				<ul>
					<li class="login">
						<!-- vtex.cmc:welcomeMessage/ -->
						<a href="/Site/Login.aspx?ReturnUrl=%2fVitrine%2fMinhaConta%2fMinhaConta.aspx">Login</a>
						<!-- end welcomeMessage -->
					</li>
					<li class="meu-carrinho"><a href="/Site/Carrinho.aspx">Meu carrinho</a></li>
					<li class="numero-pecas last">
						<a href="/Site/Carrinho.aspx">(<span class="resgata-numero-pecas">0</span>) Peças escolhidas</a>
					</li>
				</ul>
			</div><!-- end main-infos -->

			<div class="main-menu clearfix">
				<ul class="menu-store clearfix">
					<li class="opcao"><a href="#">Camisas</a></li>
					<li class="opcao"><a href="#">Caftans</a></li>
					<li class="opcao"><a href="#">Vestidos</a></li>
					<li class="opcao"><a href="#">Blazers</a></li>
					<li class="opcao last"><a href="#">Acessórios</a></li>
				</ul>

				<div class="container-search clearfix">
					<!-- vtex.cmc:fullTextSearchBox/ -->
					<fieldset class="busca">
						<legend>Buscar no site</legend>
						<label>Buscar</label>
						<select id="ftDept1b640a1915ad4b9bbeea6e81c151cf59">
							<option value="">Todo o site</option>
							<option value="1">Roupas</option>
							<option value="13">Acessórios</option>
						</select>
						<input type="hidden" id="ftIdx1b640a1915ad4b9bbeea6e81c151cf59" value="">
						<input id="ftBox1b640a1915ad4b9bbeea6e81c151cf59" class="fulltext-search-box ui-autocomplete-input" type="text" size="20" accesskey="b" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
						<input id="ftBtn1b640a1915ad4b9bbeea6e81c151cf59" type="button" value="Buscar" class="btn-buscar">
					</fieldset>
					<!-- end fullTextSearchBox -->
				</div><!-- end container-search -->
			</div><!-- end main-menu -->
		</div><!-- column-right -->
	</div><!-- end container-top -->
</div><!-- end header -->