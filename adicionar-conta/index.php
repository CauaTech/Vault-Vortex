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
	<div class="adicionar-conta">
		<h5>Adicionar Conta</h5>
		<div class="input-conta">
			<label for="usuario">Usuario</label>
			<input type="text" class="input-adc form-control" id="usuario" name="usuario">
		</div>
		<div class="input-conta">
			<label for="password">Password</label>
			<input type="password" class="input-adc form-control" id="password" name="password">
		</div>
		<div class="input-conta">
			<label for="website">Website</label>
			<input type="text" class="input-adc form-control" id="website" name="website">
		</div>
		<div class="input-conta">
			<label for="website">Jogos</label>
			<input type="text" class="input-adc form-control" id="website" name="website">
		</div>
		<label for="categorias" class="form-label">Categorias</label>
		<select class="input-adc form-select" id="categorias" name="categorias">
			<option>Contas</option>
		    <option>Casa</option>
		    <option>Sites</option>
		    <option>Banco</option>
		    <option>Jogos</option>
	  	</select>
	  	<center>
	  		<button class="btn btn-adc">Salvar Contas</button>
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