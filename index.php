<?php 
$int = 0;
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
	<title>Login</title>
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

if (isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Senha']) && !empty($_POST['Email'])) { 
	session_start();
	$email = input($_POST['Email']);
	$email = encrypto_stack($email,"stackcrptykeyadm");


	$password = input($_POST['Senha']);
	$password = md5($password);

	$sql_valid = "SELECT * FROM `vortex-user` WHERE `email-vortex`='$email' && `senha-vortex`='$password' && `status-vortex`='1'";
	$consult_account = $connect->query($sql_valid);
	$i = $consult_account->num_rows;

	if ($i < 1) {
		header('Location: ?account_exist');
	}else{
		$sql_account = "SELECT * FROM `vortex-user` WHERE `email-vortex`='$email' && `senha-vortex`='$password'";
		$info_account = $connect->query($sql_account);
		$account = $info_account->fetch_array();

		$account_token =  $account['token-vortex'];
		$_SESSION['account_token'] = $account_token;
		header('Location: '.$flow.'inicial/');

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
			<?php 
				if (isset($_GET['account_create'])) {
					alert("account","A conta foi criada com sucesso.","#58d925","#fff");
				}

				if (isset($_GET['account_exist'])) {
					alert("found_account","Não encontramos a conta.","#f54242","#fff");
				}
			?>
			<div class="card-body">
				<form method="POST">
					<img width="100vh" src="<?php echo $flow ?>assents/img/logo/logo.png">
					<h5>Welcome</h5>
					<br>
					<br>
					<input type="email" class="form-control form-style" name="Email" placeholder="Email" required>
					<input type="password" class="form-control form-style" name="Senha" placeholder="Password" required>
					<button type="submit" class="btn btn-style">Acessar Vault</button>
				</form>
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