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
	<header class="fixed-top top-0 start-0 col-12 shadow-sm bg-white">
		<div class="brand ps-8 ms-5">
			<div class="brand-left">
				<?php
				function_exists('the_custom_logo') {
					the_custom_logo()
				}
				?>
				<h2 id="name"><?php echo get_bloginfo() ?></h2>
			</div>
			<div class="nav clearfix px-1 float-end" id="navbar">
				<?php wp_nav_menu(array('theme-location' => 'header-menu')) ?>
				<ul>
					<button id="nav-button-close">
						<li>X</li>
					</button>
				</ul>
			</div>
		</div>
		<div class="nav-button" id="nav-open">
			<button id="nav-button-open">☰</button>
		</div>
	</header>