	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registrasi - GNW AUTO WASH</title>
		<link rel="stylesheet" href="res/css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="images/gnw/gnwlogo.jpg">
		<link rel="stylesheet" href="res/plugin/FontAwesome/css/font-awesome.min.css">
	</head>
	<body>
		<div id="container" data-background="res/img/bg.jpg">
			<div class="box box-sm">
				<div class="logo">
					<span style="color:rgba(255,255,255,.4);">Registrasi</span>
					<h1 style="font-size:32pt;letter-spacing:-3px;">
						<!-- <span style="color:#a5c422"> Hugo </span> Car Wash</h1> -->
					<img src="./images/gnw/gnwlogo.jpg" style="max-width:350px">

				</div>
				<div class="form">
					<form action="proses_register.php" method="post">
						<div class="form-group" style="background:#bdbdbd;">
							<span class="form-icon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-input" placeholder="Nama" name="nama" autofocus="">
						</div>
						<div class="form-group" style="background:#bdbdbd;">
							<span class="form-icon"><i class="fa fa-phone"></i></span>
							<input type="text" class="form-input" placeholder="No.Handphone (08515654327)" name="handphone" autofocus="">
						</div>
						<div class="form-group" style="background:#bdbdbd;">
							<span class="form-icon"><i class="fa fa-envelope"></i></span>
							<input type="email" class="form-input" placeholder="Email" name="email" autofocus="">
						</div>
						<div class="form-group" style="background:#bdbdbd;">
							<span class="form-icon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-input" placeholder="password" name="password">
						</div>
						<div class="form-group" style="background:#bdbdbd;">
							<span class="form-icon"><i class="fa fa-lock"></i></span>
							<input type="password" class="form-input" placeholder="Confrim Password" name="cpassword">
						</div>
						<button class="btn btn-warning btn-block">Registrasi</button>
						<br>
						<center>
							<a href="login.php">Login</a>
						</center>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="res/plugin/jQuery/jquery-3.2.1.slim.min.js"></script>
		<script type="text/javascript" src="res/js/script.js"></script>
		<script type="text/javascript">
			$(".btn-default").click(function(){
				$("#container").removeClass("bungloon-square bungloon-underline bungloon-outline");
			});
			$(".btn-square").click(function(){
				$("#container").removeClass("bungloon-underline bungloon-outline").addClass('bungloon-square');
			});
			$(".btn-underline").click(function(){
				$("#container").removeClass("bungloon-square bungloon-outline").addClass('bungloon-underline');
			});

			$(".btn-outline").click(function(){
				$("#container").removeClass("bungloon-square bungloon-underline").addClass('bungloon-outline');
			});
		</script>
	</body>
	</html>