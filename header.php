<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo($show= 'name') ?></title>
	<meta charset="utf-8">
	<meta name="description" content="BantuUMKM">
	<meta name="author" content="Wahyu Amirulloh">
	<meta name="keywords" content="wordpress">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body>
	<header>
		<div class="brand">
			<img src="<?php echo get_template_directory_uri() ?>/assets/logo/logo.png">
			<h2 id="name">Bantu UMKM</h2>
		</div>
		<div class="nav">
			<ul>
				<a href="#">
					<li>Beranda</li>
				</a>
				<a href="#">
					<li>Produk</li>					
				</a>
				<a href="#">
					<li>Layanan</li>
				</a>
				<a href="#">
					<li>Hubungi Kami</li>
				</a>
			</ul>
		</div>
	</header>