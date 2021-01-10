<?php get_header() ?>
<div class="products-list">
    <div class="container">
        <div class="card-container">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3>Produk</h3>
                        <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
                    </div>
                </div>
            </div>
            <div class="row">        
                <?php
                $productcount = wp_count_posts('products')->publish;
                $productstart = ceil($productcount / 3);

                for ($productoffset=0; $productoffset <= $productcount; $productoffset+=$productstart) { ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <?php
                        $posts_product = new WP_Query(
                            array(
                                'post_type' => 'products',
                                'posts_per_page' => $productstart,
                                'offset' => $productoffset
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
                                        <span><?php
                                        if(get_field('Price')):
                                            echo 'Rp' . number_format(get_field('Price'));
                                        else:
                                            echo 'Free';
                                        endif;
                                        ?></span>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-success">Beli Sekarang</a>
                                    </div>
                                </div>      
                            <?php }
                        } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>