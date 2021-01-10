<?php get_header(); ?>
<div class="col-xl-8 col-md-10 col-sm-12 product-description">
    <div class="card">
        <div class="row">
            <div class="col-xl-6">
                <div class="product-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="product-headesc">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <h2 class="price">
                    <?php 
                    if(get_field('Price')){
                        echo 'Rp' . number_format(get_field('Price'));
                    } else {
                        'Free';
                    }
                    ?>
                    </h2>
                    <hr>
                    <div class="contact">
                        <div class="whatsapp">
                            <a class="btn btn-outline-success" href="https://wa.me/<?php echo get_theme_mod('wp_contactinfo-contact') ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logo/whatsapp.png" alt="WhatsApp Icon">
                                <span>Beli Sekarang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl-8 col-md-10 col-sm-12">
                    <h2>Deskripsi Produk</h2>
                    <hr>
                    <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>