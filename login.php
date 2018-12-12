<html>
<body background="img/wallpaper.jpg">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<script src="asset/js/bootstrap.min.js"></script>
		<script src="asset/jquery/jquery-3.2.1.min.js"></script>
		<script src="asset/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<style>
		.card {
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
		}
		.card-default {
			max-width: 500px;
		}
		body, html {
 		height: 100%;
  		margin: 0;
		}
	</style>
	<body>
		<div class="container">
			<div class="card card-default">
				<div class="card-header">
				<h3 class="text-center">Login</h3>
				<?php
						if (isset($_GET['error'])) {
					?>
						<h4 class="text-center" style="color:red"> Email Atau Password Salah</h4>
					<?php  
					}
					?>
					
					<?php
						if (isset($_GET['harus_login'])) {
					?>
						<h4 class="text-center" style="color:red">Anda Harus Login</h4>
					<?php  
					}
					?>
				</div>
					<div class="card-body">
					<form action="proses/login.php" method="post">

						<div class="form-group">
							<label>Email</label>
							<input type="Email" class="form-control" name="Email" required/>
						</div>
						
						<div class="form-group">
							<label>Pilih Password</label>
							<input type="Password" class="form-control" name="password" required/>
						</div>
						
						
						<button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>
					</div>

		
</html>