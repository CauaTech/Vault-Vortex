<?php 
$int = 1;
if ($int == 0) {
	$flow = "./";
}elseif ($int == 1) {
	$flow = "../";
}elseif ($int == 2) {
	$flow = "../../";
}elseif ($int == 3) {
	$flow = "../../../";
}elseif ($int == 4) {
	$flow = "../../../../";
}elseif ($int == 5) {
	$flow = "../../../../../";
}elseif ($int == 6) {
	$flow = "../../../../../../";
}
?>

<!DOCTYPE html>
<html>

<!--HEAD COMPLETO-->
<head>
	<title>Pagina Inicial</title>
	<meta name="language" content="pt-BR">
	<meta name="description" content="Bem-vindo ao site da nossa empresa de criação de sites! Somos especializados em oferecer soluções web personalizadas e de alta qualidade para atender às necessidades específicas de cada um de nossos clientes.">
	
	<meta name="robots" content="all">
	<meta name="author" content="M0rx">

	<meta name="keywords" content="Stack, StackStore, Comprar site, preciso de um site, criador de site, programador">

	<link rel="canonical" href="https://stackstore.com.br"/>
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:image" content="https://stackstore.com.br/assents/img/logo/NewLogo7.png">

	<?php include($flow.'assents/app/head.php');?>
</head>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body>

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="container">
 	<div class="card contas-recentes">
 		<div class="card-body">
 			<div class="container">
 				<h5>Debloquear</h5>
 				<hr>
 				<div class="row">
 					<div class="col-md-12">
 						<div class="card card-contas">
 							<div style="float: left;">
 								<div class="pattern">
 									<img src="<?php echo $flow ?>assents/img/logo-steam.png">
 								</div> 
 								<div class="textos">
									Steam account 
									<br> 
									Email@gmail.com
								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="cod-acces">
 		<label for="acces">Senha Ativa</label>
 		<input type="text" class="input-acces form-control" placeholder="testando senha" id="acces" name="acces">
 	</div>
 	<div class="row">
 		<div class="col-md-4">
 			<div class="info-account">
 				Data de Cadastro<br>
 				12/06/2023
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="info-account">
 				Ultima vez Acessado<br>
 				19/06/2023
 			</div>
 		</div>
 		<div class="col-md-4">
 			<div class="info-account">
 				Codigo de Criptografia<br>
 				GiU467Q@3NkoB^pR
 			</div>
 		</div>
 	</div>
 	<div class="categoria-info">
 		<center>
 			<h3>Categoria</h3>
 			<h3>Conta Jogos</h3>
 		</center>
 	</div>
</div>
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>