<html>
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
	</style>
	<body>
		<div class="container">
			<div class="card card-default">
				<div class="card-header">
				<h3 class="text-center">Daftar </h3>
				</div>
					<div class="card-body">
					<form action="proses/daftar.php" method="post">

						<input type="hidden" name="id_buku" value="<?php echo $row['id_buku']; ?>">

						<div class="form-group">
							<label>Nama Anda</label>
							<input type="text" class="form-control" name="nama" required/>
						</div>

						<div class="form-group">
							<label>Email</label>
							<input type="Email" class="form-control" name="Email" required/>
						</div>
						
						<div class="form-group">
						  <label>Alamat</label>
						  <textarea class="form-control" rows="3" id="alamat"></textarea>
						</div>

						<div class="form-group">
						  <label>No.HP</label>
						  <input type="number" class="form-control" name="hp"></textarea>
						</div>
						

						<label class="form-group" style="padding-bottom:10px">
							<label>Jenis Kelamin </label>
							<p>
							<select id="kelamin" name="kelamin">
							  <option value="Pria">Pria</option>
							  <option value="Wanita">Wanita</option>
							</select>
						
						<div class="form-group">
							<label>Pilih Password</label>
							<input type="Password" class="form-control" name="password" required/>
							<label>Ketik Ulang Password</label>
							<input type="Password" class="form-control" name="password" required/>
						</div>
						
						
						<button type="submit" class="btn btn-primary">Daftar</button>
					</form>
					</div>

		
</html>