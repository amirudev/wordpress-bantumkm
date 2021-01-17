<!DOCTYPE html>
<html>
<head>
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
			<?php
			function_exists('the_custom_logo') {
				the_custom_logo()
			}
			?>
			<h2 id="name"><?php echo get_bloginfo() ?></h2>
		</div>
		<div class="nav bg-light" id="navbar">
			<?php wp_nav_menu(array('theme-location' => 'header-menu')) ?>
			<div class="cart">
				<p>3 Items - Rp47.000</p>
			</div>
			<ul>
				<button id="nav-button-close">
					<li>X</li>
				</button>
			</ul>
		</div>
		<div class="nav-button" id="nav-open">
			<button id="nav-button-open">☰</button>
		</div>
	</header>