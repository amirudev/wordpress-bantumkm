<?php get_header(); ?>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Produk</h3>
                <p class="text-subtitle text-muted">Dapatkan produk terbaru dan terlaris kami disini</p>
            </div>
        </div>
    </div>
    <?php $args_product = array('posts_per_page' => 6, 'category_name' => 'product');
    $product_post_query = new WP_Query($args_product);
    if($product_post_query->have_posts()) {
        while($product_post_query->have_posts()) {
            $product_post_query->the_post(); ?>
            <div class="card col-xl-4 col-md-6 col-sm-12 h-500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <p class="card-text">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="card-image">
                        <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('medium');
                        } else {
                            ?>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                            <?php
                        }
                         ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light">
                    <span><?php echo 'Rp' . number_format(get_field('price'), 0, ".", ".") ?></span>
                    <button class="btn btn-success">Buy Now</button>
                </div>
            </div>
        <?php }
    } ?>
</div>
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Blog</h3>
                <p class="text-subtitle text-muted">Dapatkan informasi terbaru disini</p>
                <hr>
            </div>
        </div>
    </div>
    <?php $args_product = array('posts_per_page' => 6, 'category_name' => 'blog');
    $product_post_query = new WP_Query($args_product);
    if($product_post_query->have_posts()) {
        while($product_post_query->have_posts()) {
            $product_post_query->the_post(); ?>
            <div class="card col-xl-4 col-md-6 col-sm-12 h-500">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <p class="card-text">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="card-image">
                        <?php 
                        if(has_post_thumbnail()){
                            the_post_thumbnail('medium');
                        } else {
                            ?>
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
                            <?php
                        }
                         ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light">
                    <!-- Tanggal blog -->
                    <button class="btn btn-success">Baca Selengkapnya</button>
                </div>
            </div>
        <?php }
    } ?>
</div>
<?php get_footer(); ?>