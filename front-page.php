<?php get_header(); ?>
    <div class="grid-container product-container">
		<div class="main-product">
			<div class="card" id="card-1">
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		<div class="side-product">
			<div class="card" id="card-2">
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
		<div class="side-product">
			<div class="card" id="card-3">
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>
		</div>
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
            <div class="col-xl-4 col-md-6 col-sm-12">
                <?php 
                $posts_product_1 = new WP_Query(
                    array(
                        'post_type' => 'products',
                        'posts_per_page' => 3,
                        'offset' => 0,
                    )
                );
                if($posts_product_1->have_posts()) {
                    while($posts_product_1->have_posts()) {
                        $posts_product_1->the_post(); ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <p class="card-text">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                                <!-- Image placeholder -->
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span><?php the_field('Price') ?></span>
                                <button class="btn btn-success">Beli Sekarang</button>
                            </div>
                        </div>
                    <?php }
                } ?>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12">
            <?php 
            $posts_product_2 = new WP_Query(
                array(
                    'post_type' => 'products',
                    'posts_per_page' => 3,
                    'offset' => 3,
                )
            );
            if($posts_product_2->have_posts()) {
                while($posts_product_2->have_posts()) {
                    $posts_product_2->the_post(); ?>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <!-- Image placeholder -->
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <span><?php the_field('Price') ?></span>
                            <button class="btn btn-success">Beli Sekarang</button>
                        </div>
                    </div>
                <?php }
            } ?>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12">
                <?php 
                $posts_product_3 = new WP_Query(
                    array(
                        'post_type' => 'products',
                        'posts_per_page' => 3,
                        'offset' => 6,
                    )
                );
                if($posts_product_3->have_posts()) {
                    while($posts_product_3->have_posts()) {
                        $posts_product_3->the_post(); ?>
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <p class="card-text">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                                <!-- Image placeholder -->
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <span><?php the_field('Price') ?></span>
                                <button class="btn btn-success">Beli Sekarang</button>
                            </div>
                        </div>
                    <?php }
                } ?>
			</div>
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
            <div class="col-xl-4 col-md-6 col-sm-12">
                <?php 
                $post_blog_1 = new WP_Query(
                    array(
                        'post_type' => 'blog',
                        'post_per_page' => '3',
                        'offset' => 0,
                    )
                );

                if($post_blog_1->have_posts()){
                    while($post_blog_1->have_posts()){
                        $post_blog_1->the_post(); ?>
                        <div class="card">
                            <div class="card-content">
                                <!-- Image Placeholder -->
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text">
                                        <?php the_excerpt(); ?>
                                    </p>
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
            <div class="col-xl-4 col-md-6 col-sm-12">
                <?php 
                $post_blog_2 = new WP_Query(
                    array(
                        'post_type' => 'blog',
                        'post_per_page' => '3',
                        'offset' => 3,
                    )
                );

                if($post_blog_2->have_posts()){
                    while($post_blog_2->have_posts()){
                        $post_blog_2->the_post(); ?>
                        <div class="card">
                            <div class="card-content">
                                <!-- Image Placeholder -->
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    <?php }
                }
                ?>
            </div>
            <div class="col-xl-4 col-md-6 col-sm-12">
                <?php 
                $post_blog_3 = new WP_Query(
                    array(
                        'post_type' => 'blog',
                        'post_per_page' => '3',
                        'offset' => 6,
                    )
                );

                if($post_blog_3->have_posts()){
                    while($post_blog_3->have_posts()){
                        $post_blog_3->the_post(); ?>
                        <div class="card">
                            <div class="card-content">
                                <!-- Image Placeholder -->
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text">
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Cras justo odio</li>
                                <li class="list-group-item">Dapibus ac facilisis in</li>
                                <li class="list-group-item">Vestibulum at eros</li>
                            </ul>
                            <button class="btn btn-primary">Baca Selengkapnya</button>
                        </div>
                    <?php }
                }
                ?>
            </div>
        </div>
	</section>