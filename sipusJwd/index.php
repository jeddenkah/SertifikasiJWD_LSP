<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!doctype html>
<html>

<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="images/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
					PERPUSTAKAAN UMUM
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarText">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<!-- <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li> -->
					</ul>
					<span class="navbar-text">
						Jl. Lembah Abang No 11, Telp: (021)55555555
					</span>
				</div>
			</div>
		</nav>
	</header>
	
	<main class="flex-shrink-0">
		
		<div id="header2" class="mt-3">
			<div id="nama-user">Hai Admin !</div>
		</div>
		<div class="row">
			<div class="col-md-2 mt-5">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link <?php echo (strpos($_GET['p'],'beranda')!== false) ? 'active' : ''; ?>" aria-current="page" href="index.php?p=beranda">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled">Entry Data Dan Transaksi</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo (strpos($_GET['p'],'anggota')!== false) ? 'active' : ''; ?>" href="index.php?p=anggota">Data Anggota</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo (strpos($_GET['p'],'buku')!== false) ? 'active' : ''; ?>" href="index.php?p=buku">Data Buku</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo (strpos($_GET['p'],'transaksi')!== false) ? 'active' : ''; ?>" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
					</li>
					
				</ul>
			</div>
			<div class="col-md-10">
					<div class="container">
						<div class="row"><br /><br /><br />
							<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
								<div class="col-md-4 col-md-offset-4">
									<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">

										<div class="panel-footer">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					$pages_dir = 'pages';
					if (!empty($_GET['p'])) {
						$pages = scandir($pages_dir, 0);
						unset($pages[0], $pages[1]);
						$p = $_GET['p'];
						if (in_array($p . '.php', $pages)) {
							include($pages_dir . '/' . $p . '.php');
						} else {
							echo 'Halaman Tidak Ditemukan';
						}
					} else {
						include($pages_dir . '/beranda.php');
					}
					?>
				</div>
			</div>

		<!-- <div id="sidebar">
			<a href="index.php?p=beranda">Beranda</a>
			<p class="label-navigasi">Entry Data Dan Transaksi</p>
			<ul>
				<li><a href="index.php?p=anggota">Data Anggota</a></li>
				<li><a href="index.php?p=buku">Data Buku</a></li>
				<li><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
			</ul>
		</div> -->

	</main>
	<footer class="footer mt-auto py-3 bg-light">
		<div class="container">
			<span class="text-muted">
			Sistem Informasi Perpustakaan (sipus) | Praktikum 
			</span>
		</div>
	</footer>
	<script src="validation.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>