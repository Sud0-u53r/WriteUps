<?php
session_start();

if(!isset($_SESSION['loggedin'])) {
	if (isset($_POST['username']) && isset($_POST['password'])) {
		if($_POST['username'] === 'user001' && $_POST['password'] === 'a8%&)E]G0q') {
		   	$_SESSION['loggedin'] = 'success';
			header("Location: ./");
			exit;
		} else {
			$_SESSION['wrong'] = "<script>alert('Invalid Credentials');</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page | Boogeyman</title>
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/business-frontpage.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<?php if(isset($_SESSION['wrong'])) { echo $_SESSION['wrong']; session_unset(); session_destroy(); } ?>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./">Home</a>
					</li>
					<?php if(!isset($_SESSION['loggedin'])) { ?>
					<li class="nav-item">
						<a class="nav-link" href="./#etymology">Etymology</a>
					</li>
					<?php } ?>
					<?php if(!isset($_SESSION['loggedin'])) { ?>
					<li class="nav-item">
						<a class="nav-link" href="./#login">Login</a>
					</li>
					<?php } else { ?>
					<li class="nav-item">
					<a class="nav-link" href="./user_login.php">Logout</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</nav>
	<?php if(!isset($_SESSION['loggedin'])) { ?>
	<header class="bg-primary py-5 mb-5">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-lg-12">
					<h1 class="display-4 text-white mt-5 mb-2">Boogeyman</h1>
					<p class="lead mb-5 text-white-50">The Bogeyman is a mythical creature used by adults to frighten children into good behaviour. The Bogeyman has no specific appearance, and conceptions vary drastically by household and culture, but is commonly depicted as a masculine or androgynous monster that punishes children for misbehavior.</p>
					<div id="etymology"></div>
				</div>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-8 mb-5">
				<h2>Etymology</h2>
				<hr>
				<p>The word bogey is believed to be derived from the Middle English bogge / bugge ("something frightening", "scarecrow"). Theories on its origin include a root meaning "goat", or a cognate of the German b&#246;gge, b&#246;ggel-mann ("goblin")</p>
				<a class="btn btn-primary" href="./#etymology">Details</a>
			</div>
			<div class="col-md-4 mb-5">
				<h2>Contact Us</h2>
				<hr>
				<address>
					<strong>Boogeyman</strong>
					<br>2850 Shadelands Dr
					<br>Suite 101
					<br>Walnut Creek, CA 94598
					<br>
				</address>
				<address>
					Phone : (123) 456-7890
					<br>
					Email : <a href="mailto:#">test@example.com</a>
				</address>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<div class="card-body">
						<h4 class="card-title">Sack Man</h4>
						<p class="card-text">In many countries, a bogeyman variant is portrayed as a man with a sack on his back who carries naughty children away.</p>
					</div>
					<div class="card-footer">
						<a href="./#etymology" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<div class="card-body">
						<h4 class="card-title">El Coco</h4>
						<p class="card-text">El Coco (also El Cuco and Cucuy, sometimes called El Bolo) is a monster common to many Spanish-speaking countries.</p>
					</div>
					<div class="card-footer">
						<a href="./#etymology" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 mb-5">
				<div class="card h-100">
					<div class="card-body">
						<h4 class="card-title">Butzemann</h4>
						<p class="card-text">Germanic folklore has dozens of different figures that correspond to the Bogeyman.</p>
					</div>
					<div class="card-footer">
						<a href="./#etymology" class="btn btn-primary">Find Out More!</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container login-container" align="center" id="login">
			<div class="col-md-6 login-form-2">
				<h3>Login here</h3>
				<!-- <form action="" method="POST"> -->
				<form action="./user_login.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" value="" name="username" autocomplete="off" />
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" value="" name="password" autocomplete="off" />
					</div>
					<div class="form-group">
						<input type="submit" class="btnSubmit" value="Login" />
					</div>
					<div class="form-group" style="color: #f0f0f0;font-family: Ubuntu Mono;">
						<table><tr><td colspan="2">Default Credentials</td></tr> <tr><td>Username :</td><td>user001</td></tr><tr><td>Password :</td><td>a8%&)E]G0q</td></tr></table>
					</div>
				</form>
			</div>
		</div>
		<?php } else { ?>
			<header class="bg-primary py-5 mb-10">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-lg-12">
							<h1 class="display-4 text-white mt-5 mb-2"><?php if($_SESSION['loggedin'] == 'success') { echo "Invader{To0_e4sy_f0r_U_ri9ht!!?}"; session_unset(); session_destroy(); ?>  <?php } else { ?>Page is under construction <?php } ?></h1>
						</div>
					</div>
				</div>
			</header>
		<?php } ?>
</div>
<div id="bottom"><br><br></div>
	</div>
	<footer class="py-3 bg-dark" style="position: fixed;bottom: 0%;left: 0%;width: 100%;">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
		</div>
	</footer>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
