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

<div class="row">
	<div class="col-md-12">
		<div class="input-group mb-3">
		  <input type="text" class="form-control form-style" placeholder="Search">
		  <button class="btn btn-search" type="submit">Pesquisar</button>
		</div>
	</div>
	<div class="col-md-12">
		<label>Categorias</label>
		<br>
		<a href="#"><span class="badge btn-on-categorias">Todos</span></a>
		<a href="#"><span class="badge btn-off-categorias">Contas</span></a>
		<a href="#"><span class="badge btn-off-categorias">Banco</span></a>
		<a href="#"><span class="badge btn-off-categorias">Casa</span></a>
		<a href="#"><span class="badge btn-off-categorias">Compras</span></a>
	</div>
	<div class="col-md-12">
		<div class="add-categoria">
			<center><button class="btn btn-add-categoria"><i style="font-size:15px;" class="fi fi-br-plus-small"></i>Adicionar categoria </button></center>
		</div>
	</div>
</div>
 	<div class="card contas-recentes">
 		<div class="card-body">
 			<div class="container">
 				<h5>Recentes</h5>
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
 	<button type="button" class="btn btn-add btn-sm">Adicionar</button>
 	<div class="all-account">
 		<h5>Todos</h5>
		<div class="row">
			<div class="col-md-12">
				<div class="card card-all-accont">
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
			<div class="col-md-12">
				<div class="card card-all-accont">
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
			<div class="col-md-12">
				<div class="card card-all-accont">
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
			<div class="col-md-12">
				<div class="card card-all-accont">
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
			<div class="col-md-12">
				<div class="card card-all-accont">
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
			<div class="col-md-12">
				<div class="card card-all-accont">
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
			<div class="col-md-12">
				<div class="card card-all-accont">
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
<!-- Finalizar/Body -->

<!--Ativar Footer Editar-->
<?php #include($flow.'assents/app/footer.php'); ?>

<!--Import Cookie Enable-->
<?php include($flow.'assents/app/cookie.php'); ?>


</body>
</html>