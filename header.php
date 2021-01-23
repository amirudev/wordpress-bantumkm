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
	<header class="fixed-top top-0 start-0 w-100 shadow-sm bg-white">
		<div class="brand ps-8 mt-3 ms-5">
			<?php
			function_exists('the_custom_logo') {
				the_custom_logo()
			}
			?>
			<h2 id="name"><?php echo get_bloginfo() ?></h2>
		</div>
		<div class="nav bg-light clearfix px-1 py-2" id="navbar">
			<?php wp_nav_menu(array('theme-location' => 'header-menu')) ?>
			<a href="#" class="text-dark"><div class="cart">
				<p class="mx-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
					<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg> <?php if(isset($_COOKIE['cartdata'])){'Rp' . $_COOKIE['cartdata'];} ?></p>
			</div></a>
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