<?php get_header(); ?>
    <div class="grid-container product-container">
        <?php
        $posts_product_A = new WP_Query(
            array(
                'post_type' => 'products',
                'posts_per_page' => 1,
                'offset' => 0
            )
        );
        if($posts_product_A->have_posts()) {
            $posts_product_A->the_post(); ?>
            <div class="main-product">
                <div class="card" id="card-1">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_Excerpt(); ?></p>
                        <a href="#" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                    <div class="main-product-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        $posts_product_B = new WP_Query(
            array(
                'post_type' => 'products',
                'posts_per_page' => 1,
                'offset' => 1
            )
        );
        if($posts_product_B->have_posts()) {
            $posts_product_B->the_post();?>
            <div class="side-product">
                <div class="card" id="card-2">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><?php the_excerpt(); ?></div>
                        <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                    <div class="side-product-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php
        $posts_product_C = new WP_Query(
            array(
                'post_type' => 'products',
                'posts_per_page' => 1,
                'offset' => 2
            )
        );
        if($posts_product_C->have_posts()) {
            $posts_product_C->the_post(); ?>
            <div class="side-product">
                <div class="card" id="card-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <div class="card-text"><?php the_excerpt(); ?></div>
                        <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                    <div class="side-product-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
	</div>
	<section class="card-container">
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6">
					<h3>Products</h3>
					<p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
				</div>
			</div>
		</div>
        <div class="row">
            <?php for ($display_offset=0; $display_offset <= 6; $display_offset += 3) { ?>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <?php 
                    $posts_product = new WP_Query(
                        array(
                            'post_type' => 'products',
                            'posts_per_page' => 3,
                            'offset' => $display_offset,
                        )
                    );
                    if($posts_product->have_posts()) {
                        while($posts_product->have_posts()) {
                            $posts_product->the_post(); ?>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title" id="<?php the_ID(); ?>"><?php the_title(); ?></h4>
                                        <p class="card-text">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-between">
                                    <span><?php the_field('Price') ?></span>
                                    <button class="btn btn-success">Beli Sekarang</button>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            <?php } ?>
		</div>
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6">
					<h3>Blog</h3>
					<p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
				</div>
			</div>
		</div>
        <div class="row">
            <?php for ($display_offset=0; $display_offset <= 6; $display_offset += 3) { ?>
                # code...
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <?php 
                    $post_blog_1 = new WP_Query(
                        array(
                            'post_type' => 'blog',
                            'post_per_page' => '3',
                            'offset' => $display_offset,
                        )
                    );

                    if($post_blog_1->have_posts()){
                        while($post_blog_1->have_posts()){
                            $post_blog_1->the_post(); ?>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text">
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                                    <div class="card-image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Dibuat pada <?php the_date(); ?></li>
                                    <li class="list-group-item">Author : <?php the_author(); ?></li>
                                </ul>
                                <button class="btn btn-primary">Baca Selengkapnya</button>
                            </div>
                        <?php }
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </section>
    <?php get_footer(); ?>