<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:vtex="http://www.vtex.com.br/2009/vtex-common" xmlns:vtex.cmc="http://www.vtex.com.br/2009/vtex-commerce">
<head>
	<title>Roupas femininas, roupas masculinas, perfumes e acessórios</title>
	<!-- <vtex:metaTags/> -->
		<?php include("controles/metaTags.php") ?>
	<!-- end <vtex:metaTags/> -->

	<!-- estilos fixos em todas as páginas -->
	<link rel="stylesheet" type="text/css" href="./arquivos/css-reset.css" />
	<link rel="stylesheet" type="text/css" href="./arquivos/css-general.css" />
	<link rel="stylesheet" type="text/css" href="./arquivos/css-subtemplates.css" />
	<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css' />
	<!-- end estilos fixos em todas as páginas -->

	<!-- estilo da página atual -->
	<!-- end estilo da página atual -->
</head>

<body>
	<!-- <vtex:template id="topBar" /> -->
	<?php include("subtemplates/topBar.php"); ?>
	<!-- end <vtex:template id="topBar" /> -->

	<div id="containerGeral">
		<!-- <vtex:template id="header" /> -->
		<?php include("subtemplates/header.php") ?>
		<!-- end <vtex:template id="header" /> -->

		<!-- MIOLO PRINCIPAL -->
		<div id="container" class="container">


			<link rel="stylesheet" type="text/css" href="./arquivos/css-busca.css" />
			<link rel="stylesheet" type="text/css" href="./arquivos/css-jquery-ui.css" />
			<?php include("busca.php"); ?>
		</div><!-- end container -->
		<!-- end MIOLO PRINCIPAL -->

		<!-- <vtex:template id="controles-footer" /> -->
		<?php include("subtemplates/controles-footer.php") ?>
		<!-- end <vtex:template id="controles-footer" /> -->

		<!-- <vtex:template id="footer" /> -->
		<?php include("subtemplates/footer.php") ?>
		<!-- end <vtex:template id="footer" /> -->
	</div><!-- containerGeral -->

	<script src="./arquivos/js-jquery-1.4.1.min.js"></script>
	<script src="./arquivos/js-jquery.cycle.js"></script>
	<script src="./arquivos/js-jquery.carouFredSel-5.6.4-packed.js"></script>
	<script src="./arquivos/js-jquery.ui.widget.js"></script>
	<script src="./arquivos/js-jquery.ui.tabs.js"></script>
	<script src="./arquivos/js-functions.js"></script>

	<script>$("#myTabs").tabs();</script>

</body>
</html>

