	<footer>
		<div class="brand">
			<h2 id="name"><?php echo get_bloginfo() ?></h2>
			<?php wp_nav_menu(array('theme-location' => 'header-menu')) ?>
		</div>
		<div class="dev">
			<p>Designed by : Wahyu Amirulloh</p>
			<p>Contact Me</p>
			<ul>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/github-sign.png"></li>
				</a>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/linkedin.png"></li>
				</a>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/instagram.png"></li>
				</a>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/telegram.png"></li>
				</a>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/facebook.png"></li>
				</a>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/twitter.png"></li>
				</a>
				<a href="#">
					<li><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/gmail.png"></li>
				</a>
			</ul>
		</div>
	</footer>
</body>
</html>