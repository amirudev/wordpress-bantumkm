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
                        <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
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
    <section class="product-container">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>Produk Terbaru <span>Lihat Semua</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <!-- Mock Start -->
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <div class="product col-xl-2">
                <div class="product-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                </div>
                <div class="product-info">
                    <div class="product-title">
                        <span>Oraimo Bundle 3pcs Kabel Data Micro USB Fast Charging Cable OCD-M29N</span>
                    </div>
                    <div class="product-price">
                        <span>Rp19.000</span>
                    </div>
                    <div class="product-badge">
                        <span class="badge bg-success">Grosir</span>
                    </div>
                    <div class="product-addr">
                        <span>Jakarta</span>
                    </div>
                </div>
            </div>
            <!-- Mock End -->
        </div>
    </section>
    <section class="product-container">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>Blog Terbaru <span>Lihat Semua</span></h3>
                </div>
            </div>
        </div>
        <div class="col-12 blog">
            <div class="card bg-lighten-1">
                <div class="card-content">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-12 blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card-body">
                                <h4 class="card-title white">Oraimo merilis masker baru</h4>
                                <p class="card-text white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                <button class="btn btn-secondary">Baca selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mock Start -->
        <div class="col-12 blog">
            <div class="card bg-lighten-1">
                <div class="card-content">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-12 blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card-body">
                                <h4 class="card-title white">Oraimo merilis masker baru</h4>
                                <p class="card-text white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                <button class="btn btn-secondary">Baca selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 blog">
            <div class="card bg-lighten-1">
                <div class="card-content">
                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-12 blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kf94mask.jpg">
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="card-body">
                                <h4 class="card-title white">Oraimo merilis masker baru</h4>
                                <p class="card-text white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                <button class="btn btn-secondary">Baca selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mock End -->
    </section>
<?php get_footer(); ?>