<?php get_header(); ?>
    <div class="product-container display-container d-flex justify-content-center col-11">
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
            <div class="main-product col-md-6 col-12">
                <div class="card" id="card-1">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_Excerpt(); ?></p>
                        <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                    <div class="main-product-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <div class="col-6">
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
                <div class="side-product col-12">
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
                <div class="side-product col-12">
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
	</div>
    <section class="product-container col-11">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>Produk Terbaru <span><a href="#">Lihat Semua</a></span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <?php
            $display_product = new WP_Query(
                array(
                'post_type' => 'products',
                'posts_per_page' => 10,
                'offset' => 0
                )
            );
            if($display_product->have_posts()) {
                while($display_product->have_posts()) {
                    $display_product->the_post(); ?>
                    <div class="product col-xl-2 col-sm-3 col-5 shadow">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                        </div>
                        <div class="product-info">
                            <div class="product-title">
                                <span><?php echo get_the_title(); ?></span>
                            </div>
                            <div class="product-price">
                                <span>
                                <?php if(get_field_object('price_field')['value']){
                                    echo 'Rp' . number_format(get_field_object('price_field')['value']);
                                } else {
                                    echo 'Gratis';
                                } ?>
                                </span>
                            </div>
                            <div class="product-badge" style="float: left">
                                <?php foreach(get_field_object('promo_field')['value'] as $promo){
                                    echo '<span class="badge bg-success">' . $promo . '</span>';
                                } ?>
                                <!-- <span class="badge bg-success">Gratis Ongkir</span>
                                <span class="badge bg-warning">Cashback</span>
                                <span class="badge bg-danger">Bayar Di Tempat</span> -->
                            </div>
                            <div class="product-addr">
                                <span>Jakarta</span>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>
        </div>
    </section>
    <section class="product-container col-11">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>Produk Terbaru <span><a href="#">Lihat Semua</a></span></h3>
                </div>
            </div>
        </div>
        <div class="row blog">
            <div class="col-12 card blog p-3">
                <div class="m-3 pb-4 row">
                    <div class="col-sm-3 blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3 class="card-title">Oraimo Merilis Masker Baru</h3>
                        <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.</p>
                    </div>
                </div>
                <!-- Mock Start -->
                <div class="m-3 pb-4 row">
                    <div class="col-sm-3 blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3 class="card-title">Oraimo Merilis Masker Baru</h3>
                        <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.</p>
                    </div>
                </div>
                <div class="m-3 pb-4 row">
                    <div class="col-sm-3 blog-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3 class="card-title">Oraimo Merilis Masker Baru</h3>
                        <p class="card-text">Jelly-o sesame snaps cheesecake topping. Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin. Dessert bonbon caramels brownie chocolate bar chocolate tart dragée.
                        Cupcake fruitcake macaroon donut pastry gummies tiramisu chocolate bar muffin.</p>
                    </div>
                </div>
                <!-- Mock End -->
            </div>
        </div>
    </section>
<?php get_footer(); ?>