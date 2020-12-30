<?php get_header();

?>
<div class="title">
	<h2>Produk<hr/></h2>
</div>
<?php
if (have_posts()) {
	while (have_posts()) {
		the_post();
		?>
		<div class="card">
			<div class="product">
				<?php echo the_post_thumbnail('medium') ?>
				<h4><?php echo the_title() ?></h4>
				<p><?php echo the_excerpt() ?></p>
			</div>
			<div class="product-order">
				<button>Buy Now</button>
			</div>
		</div>
		<?php
	}
}

get_footer(); ?>