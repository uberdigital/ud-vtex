<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />

	<!-- chamadas zussen ============================ -->
	<link rel="stylesheet" type="text/css" href="./arquivos/css-zussen-reset.css" />
	<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="./arquivos/css-zussen-general.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="arquivos/js-zussen-functions.js"></script>
	<!-- end chamadas zussen ======================= -->

	<link rel="stylesheet" type="text/css" href="./arquivos/default.css" />
</head>

<body class="login">	
	<div class="container-general">
		<?php include 'includes/header-sistema.php'; ?>

		<div class="container-main">
			<div class="content">
				<h2>Identificação</h2>
				<div class="mainWrapper">
					<div id="ctl00_Conteudo_divCadastroVantagens" class="register-info">
						<h4>Ainda não sou cadastrado</h4>
						<p>
							Crie sua conta na Zussen e finalize sua compra<br /> rapidamente. É muito fácil e seguro! Cadastre-se!
						</p>
						<ul class="vantagens">
							<li class="seguranca">Site 100% seguro</li>
							<li class="acompanhamento">Acompanhe o andamento e o histórico de todos os seus pedidos</li>
							<li class="comunidades">Ferramentas de Comunidades: Crie seu perfil, interaja com seus amigos, crie trilhas, comente produtos e participe de discussões</li>
							<li class="listas">Crie suas próprias listas: Desejos, Compras, Casamento e Bebê</li>
							<li class="tags">Crie tags: categorize os produtos encontrados</li>
							<li class="enderecos">Salve vários endereços de entrega e agilize suas compras</li>
						</ul>
						<span class="criar-conta">
							<a id="ctl00_Conteudo_lnkCadastroCliente" title="Criar sua conta na Zussen" class="bt" href="cadastroCliente_DadosPessoais.aspx?ReturnUrl=%2fVitrine%2fMinhaConta%2fMinhaConta.aspx">Criar sua conta na Zussen</a>
						</span>
					</div>
					
					<div id="ctl00_Conteudo_divLogin" class="sign-in">
					  <h4>Já sou cadastrado na Zussen</h4>
						<div class="wrapper">
							<p>Preencha os campos abaixo para acessar sua conta:</p>
							<div id="ctl00_Conteudo_ctrlLogin_divLoginNaoAutenticado" class="sign-in-core">
								<table id="ctl00_Conteudo_ctrlLogin_ctrLogin" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;">
									<tbody>
										<tr>
											<td>
												<fieldset>
													<div class="grp fEmail">
														<label class="email">Informe seu e-mail:</label>
														<input name="ctl00$Conteudo$ctrlLogin$ctrLogin$UserName" type="text" id="ctl00_Conteudo_ctrlLogin_ctrLogin_UserName" tabindex="1" class="fitext">
														<span id="ctl00_Conteudo_ctrlLogin_ctrLogin_UserNameRequired" style="color:Red;display:none;"></span>
														<span id="ctl00_Conteudo_ctrlLogin_ctrLogin_RgxEmailValidator" style="color:Red;display:none;"></span>
														<span id="ctl00_Conteudo_ctrlLogin_ctrLogin_cstLoginValidation" style="color:Red;display:none;"></span>
														<ul class="login-email-links">
															<li><a id="ctl00_Conteudo_ctrlLogin_ctrLogin_lnkMudancaEmail" class="lnkMudancaEmail" href="MeuEmailMudou.aspx">Meu e-mail mudou</a></li>
															<li><a id="ctl00_Conteudo_ctrlLogin_ctrLogin_lnkEsqueciEmail" class="lnkEsqueciEmail" href="EsqueciMeuEmail.aspx">Esqueci meu e-mail</a></li>
														</ul>
													</div>
													<div class="grp fSenha">
														<label class="senha">Informe sua senha:</label>
														<input name="ctl00$Conteudo$ctrlLogin$ctrLogin$Password" type="password" id="ctl00_Conteudo_ctrlLogin_ctrLogin_Password" tabindex="2" class="fipassword fitext">
														<span id="ctl00_Conteudo_ctrlLogin_ctrLogin_PasswordRequired" style="color:Red;display:none;"></span>
														<ul class="login-senha-links">
															<li><a id="ctl00_Conteudo_ctrlLogin_ctrLogin_lnkEsqueciMinhaSenha" class="lnkEsqueciSenha" href="EsqueciMinhaSenha.aspx">Esqueci minha senha</a></li>
														</ul>
													</div>
													<div class="btw continuar">
																				
														<input type="submit" name="ctl00$Conteudo$ctrlLogin$ctrLogin$Login" value="Continuar" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$Conteudo$ctrlLogin$ctrLogin$Login&quot;, &quot;&quot;, true, &quot;LogIn&quot;, &quot;&quot;, false, false))" id="ctl00_Conteudo_ctrlLogin_ctrLogin_Login" title="Continuar" class="bt fisubmit">
													</div>
												</fieldset>
												<hr>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- end mainWrapper -->
			</div><!-- end content -->
		</div><!-- end container-main -->

		<?php include 'includes/footer-sistema.php'; ?>
	</div><!-- end container-general -->
</body>
</html>