<!DOCTYPE html>
<html>
<head>
	<title>Login Facebook</title>
	<!--Aplicar depois as meta tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<header>
		<div class="center largura-header">
			<div class="logo">
				<h2>facebook</h2>
			</div><!--logo-->
			
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou telefone:</p>
					<input type="email" name="email">
				</div><!--form-element-->
				<div class="form-element">
					<p>Senha:</p>
					<input type="password" name="passwd">
				</div><!--form-element-->
				<div class="form-element">
					<input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->
				<div><a href="#" class="recuperar">Esqueceu a conta?</a></div>
			</form><!--form-login-->	
			
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<p>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</p>
				<img src="images/img-fb.png" />
			</div><!--img-pessias-->

			<div class="abrir-conta">
				<h2>Abra uma conta</h2>
				<h3>É rápido e fácil.</h3>

				<form class="criar-conta">
					<div class="w50">
						<input placeholder="Nome" type="text">
					</div><!--w50-->
					<div class="w50">
						<input placeholder="Sobrenome" type="text">
					</div><!--w50-->

					<div class="w100">
						<input placeholder="Celular ou email" type="email">
					</div><!--w100-->
					<div class="w100">
						<input placeholder="Nova senha" type="password">
					</div><!--w100-->

					<div class="w100">
						<h2>Data de Nascimento:</h2>
						<select class="nascimento" name="nascimento-dia">
							<?php
								for($i = 1; $i<= 31; $i++){									
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<select name="nascimento-mes" class="nascimento">
							<option value="0">Jan</option>
							<option value="1">Fev</option>
							<option value="2">Mar</option>
							<option value="3">Abr</option>
							<option value="4">Mai</option>
							<option value="5">Jun</option>
							<option value="6">Jul</option>
							<option value="7">Ago</option>
							<option value="8">Set</option>
							<option value="9">Out</option>
							<option value="10">Nov</option>
							<option value="11">Dez</option>
						</select>
						<select name="nascimento-ano" class="nascimento">
							<?php
								for($i=1960; $i<=2020; $i++){									
							?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php } ?>
						</select>
						<div><p class="interrogação-date">?</p></div>
						<div class="clear"></div>
					</div><!--w100-->
					<div class="w100">
						<h2>Gênero</h2>
						<div class="input-radio">
							<input type="radio" name="sexo" value="masculino">
							<h2 class="h2-style">Masculino</h2>
						</div><!--radio-->
						<div class="input-radio">
							<input type="radio" name="sexo" value="feminino">
							<h2 class="h2-style">Feminino</h2>
						</div><!--radio-->
						<div class="input-radio">
							<input type="radio" name="sexo" value="personalizado">
							<h2 class="h2-style">Personalizado</h2>
						</div><!--radio-->
						<div class="clear"></div>
					</div><!--w100-->

					<div class="w50">
						<p class="interrogação">?</p>
						<p class="p-style">Ao clicar em Cadastre-se, você concorda com nossos <a href="#">Termos, Política de Dados</a> e <a href="#">Política de Cookies</a>. Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
					</div><!--w50-->

					<div class="w100">
						<input type="submit" name="acao" value="Cadastre-se" />
					</div><!--w100-->

					<div class="w100">
						<p class="p-style2"><a href="#">Criar uma Página</a> para uma celebridade, banda ou empresa.</p>
					</div><!--w100-->

					<div class="clear"></div>
				</form><!--criar-conta-->

			</div><!--abrir-conta-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--main-->
	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
			<a href="#">Português (BR)</a>
		</div><!--center-->

		<div style="border:0;padding-top:8px;" class="center">
			<a href="#">Cadastre-se</a>
			<a href="#">Entrar</a>
			<a href="#">Messenger</a>
			<a href="#">Facebook Lite</a>
			<a href="#">Watch</a>
			<a href="#">Pessoas</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
			<a href="#">lorem ipsum</a>
		</div><!--center-->

		<footer>
			<div class="center">
				<span>Facebook © 2020</span>
			</div>
		</footer>
	</section><!--linguas-->
	

</body>
</html>