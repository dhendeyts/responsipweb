<!DOCTYPE html>
<html>
<head>
	<title>Kost Putri Bulan- Penyewaan Kost</title>
	<!-- Bootstrap CSS-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href='img/gm0.png' rel='shortcut icon'>
</head>
<body style="background:#428bca;">
	<div class="container">
	<div class="row">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">
				<img alt="Brand" src="img/gm0.png" width="80px">
			  </a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
				<li><a href="beranda.php">Home <span class="sr-only">(current)</span></a></li>
				<li class="active"><a href="data-penyewa.php">Data Penyewa</a></li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<li><a href="logout.php">Logout</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div class="col-md-12" style="border: 0px solid black; background:white;">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<center>
				<tb><img src="img/gm1.jpg" width="60%" class="img-responsive" alt="Responsive image">
				<div class="page-header">
					<h2>
						<b>Kost Putri Bulan</b>
						<small><br>Aplikasi Penyewaan Kost</small>
					</h2>
				</div>
			</center><br>
			<form action="post.php" method="post">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required>
				</div>
				<div class="form-group">
					<label>noHP</label>
					<input type="text" name="nohp" id="nohp" class="form-control" placeholder="noHP" required>
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required>
				</div>
				<div class="form-group">
					<label>Kota/Kabupaten</label>
					<input type="text" name="kota" id="kota" class="form-control" placeholder="Kota/Kabupaten" required>
				</div>
				<div class="form-group">
					<label>Keperluan</label>
					<textarea  name="keperluan" id="keperluan" class="form-control" rows="4" placeholder="Jelaskan keperluan anda!" required></textarea>
				</div>
				<input type="submit" name="submit" value="pesan" class="btn btn-primary"> <br><br><br><br>
				<label>Daftar Penyewa</label><br>
				<div class="form-group">
            <?php
            //coding untuk penampilan record penyewa
                if(file_exists("db.html") && filesize("db.html") > 0){
                    $handle = fopen("db.html", "r");
                    $contents = fread($handle, filesize("db.html"));
                    fclose($handle);
                   
                    echo "$contents";
                }
                else {
                    echo "<div class='alarm'>Tidak Ada Data Penyewa<br/></div>";
                }

            ?>
        </div>
			</form><br>			
		</div>
		</div>
	</div>
	<br>
	</div>
</body>
</html>