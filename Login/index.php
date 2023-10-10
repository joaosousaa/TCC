<?php
#var_dump($_POST);

session_start();

if (isset($_POST['Usuario'], $_POST['Senha'])) {
	if ($_POST['Usuario'] == 'Sandra' && $_POST['Senha'] == '2023') {
		$_SESSION['Usuario'] = $_POST['Usuario'];
		header('Location: ../home.php');
	}
	
}
if (isset($_GET['erro'])) {
	$erro = 'É necessario logar para acessar o sistema!';
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

	<div class="limiter">
		<div style="background-color:coral;">
			<?php echo $erro ?? '' ?>
		</div>
		<div class="container-login100">

			<div class="wrap-login100">

				<div class="login100-pic js-tilt" data-tilt>
					<img src="../img/logo3.png" alt="IMG">

				</div>

				<form action="" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Usuario" placeholder="Nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="Senha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Entrar
						</button>
					</div>


				</form>

			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>

</body>

</html>