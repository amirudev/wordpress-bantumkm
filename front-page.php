<?php get_header(); ?>
    <div class="product-container display-container d-flex justify-content-center col-11 my-5 mx-auto">
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
            <a href="<?php the_permalink(); ?>" class="plain-link">
            <div class="main-product col-sm-6 col-12">
                <div class="card h-100" id="card-1">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php the_Excerpt(); ?></p>
                        <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                    <div class="main-product-image position-absolute bottom-0 start-0">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </div>
            </div>
            </a>
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
                <a href="<?php the_permalink(); ?>" class="plain-link">
                <div class="side-product col-12 h-50 m-0 mb-2 ms-3">
                    <div class="card h-100" id="card-2">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <div class="card-text"><?php the_excerpt(); ?></div>
                            <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                        <div class="side-product-image position-absolute start-0 bottom-0">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                </div>
                </a>
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
                <a href="<?php the_permalink(); ?>" class="plain-link">
                <div class="side-product col-12 h-50 m-0 mb-2 ms-3">
                    <div class="card h-100" id="card-3">
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <div class="card-text"><?php the_excerpt(); ?></div>
                            <a href="#<?php the_ID(); ?>" class="btn btn-primary">Beli Sekarang</a>
                        </div>
                        <div class="side-product-image position-absolute start-0 bottom-0">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                </div>
                </a>
            <?php } ?>
        </div>
	</div>
    <section class="product-container col-11 mx-auto my-5">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3 class="fs-4 fw-bold">Produk Terbaru <span class="fs-6 fw-bold"><a href="product">Lihat Semua</a></span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-around">
            <?php
            $display_product = new WP_Query(
                array(
                'post_type' => 'products',
                'posts_per_page' => 5,
                'offset' => 0
                )
            );
            if($display_product->have_posts()) {
                while($display_product->have_posts()) {
                    $display_product->the_post(); ?>
                    <div class="product col-xl-2 col-sm-3 col-10 shadow position-relative bg-white rounded text-secondary m-2 p-1" id="<?php the_id(); ?>">
                        <a href="<?php the_permalink(); ?>" class="plain-link">
                        <div class="product-image">
                            <?php if(has_post_thumbnail()){
                                echo the_post_thumbnail();
                            } else { ?>
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/no-image.png"></img>
                            <?php } ?>
                        </div>
                        <div class="product-info p-2">
                            <div class="product-title">
                                <span><?php echo get_the_title(); ?></span>
                            </div>
                            <div class="product-price fw-bold text-dark">
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
                                    echo '<span class="badge bg-success">' . $promo . '</span> ';
                                } ?>
                            </div>
                            <div class="product-addr">
                                <span class="position-absolute">
                                    <?php $shipped = get_field_object('shipped_field')['value']; 
                                        if($shipped){
                                            echo $shipped;
                                        } else {
                                            echo 'Indonesia';
                                        }?>
                                </span>
                            </div>
                        </div>
                        </a>
                    </div>
                <?php }
            }
            ?>
        </div>
    </section>
    <section class="product-container col-11 mx-auto my-5">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3 class="fs-4 fw-bold">Blog Terbaru <span class="fs-6 fw-bold"><a href="blog">Lihat Semua</a></span></h3>
                </div>
            </div>
        </div>
        <div class="row blog mx-2">
            <div class="col-12 card blog m-0 rounded">
                <?php
                $display_blog = new WP_Query(
                    array(
                        'post_type' => 'blog',
                        'posts_per_page' => 3,
                        'offset' => 0
                    )
                );
                
                if($display_blog->have_posts()) {
                    while($display_blog->have_posts()) {
                        $display_blog->the_post(); ?>
                <div class="m-3 pb-4 row border-bottom border-2">
                    <div class="col-sm-3 blog-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="col-sm-9">
                        <a href="<?php the_permalink(); ?>" class="plain-link">
                        <h3 class="card-title p-1"><?php the_title(); ?></h3>
                        <p class="card-text ps-3 border-bottom"><?php the_excerpt(); ?></p>
                        </a>
                    </div>
                </div>
                <?php }
                } ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>