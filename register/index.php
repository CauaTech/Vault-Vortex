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
	<title>Register</title>
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
<?php 

if (isset($_POST['User']) && !empty($_POST['User']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Senha']) && !empty($_POST['Senha'])) {
	$user = input($_POST['User']);
	$email = input($_POST['Email']);
	$email = encrypto_stack($email,"stackcrptykeyadm");
	$token = gen(16);

	$sql_valid = "SELECT * FROM `vortex-user` WHERE `user-vortex`='$user' && `email-vortex`='$email'";
	$consult_valid = $connect->query($sql_valid);
	$valid = $consult_valid->num_rows;
	if ($valid > 0) {
		header('Location: ?account_exist');
	}else{
		$password = input($_POST['Senha']);
		$password = md5($password);

		$sql_create = "INSERT INTO `vortex-user`(`user-vortex`, `email-vortex`, `senha-vortex`, `token-vortex`,`status-vortex`) VALUES ('$user','$email','$password','$token','0')";
		$create_account = $connect->query($sql_create);
		header('Location: '.$flow.'?account_create');
	}
}

?>

<!--Importando Css-->
<?php include($flow.'assents/css/style_global.php'); ?>

<body>

<!--Ativar/Desligar Load-->
<?php #include($flow.'assents/app/load.php'); ?>

<!--Ativar Navbar Editar-->
<?php #include($flow.'assents/app/navbar.php'); ?>

<!-- Body -->
<div class="container">
	<div class="margin-login">
		<center>
		<div class="card card-login">
			<div class="card-body">
				<?php 
					if (isset($_GET['account_exist'])) {
						alert("account","O email ou usuario ja existem.","#ed2f2f","#fff");
					}
				?>
					<img width="100vh" src="<?php echo $flow ?>assents/img/logo/logo.png">
					<h5>Welcome</h5>
					<br>
					<br>
					<form method="POST">
						<input type="usuario" class="form-control form-style" name="User" placeholder="Usuario" required>
						<input type="email" class="form-control form-style" name="Email" placeholder="Email" required>
						<input type="password" class="form-control form-style" name="Senha" placeholder="Password" required>
	      				<input class="form-check-input" type="checkbox" name="remember" required> Aceitar Policas e Temos do Site
	      				<br>
	      				<br>
						<button type="submit" class="btn btn-style">Registrar Vault</button>
					</form>
					Ja tenho uma conta <a style="text-decoration: none; color: #4261EF;" href="#">Acessar</a>
			</div>
		</div>
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