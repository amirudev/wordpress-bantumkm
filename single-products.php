<?php get_header(); ?>

<div class="col-xl-8 col-md-10 col-sm-11 product-description mx-auto p-2">
    <div class="card rounded p-4">
        <div class="row">
            <div class="col-xl-6">
                <div class="product-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="product-headesc">
                    <h2 class="title"><?php the_title(); ?></h2>
                    <h2 class="price text-success">
                    <?php 
                    if(get_field('price')){
                        echo 'Rp' . number_format(get_field('price'));
                    } else {
                        'Free';
                    }
                    ?>
                    </h2>
                    <hr>
                    <div class="contact row d-flex justify-content-between">
                        <div class="whatsapp col-6">
                            <a class="btn btn-outline-success w-100" href="<?php echo get_template_directory_uri(); ?>/functions/products-whatsapp.php?name=<?php echo get_the_title(); ?>&price=<?php echo get_field('price'); ?>"> <!-- THIS POINT -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                </svg>
                                <span>Beli Sekarang</span>
                            </a>
                        </div>
                        <div class="addcart col-6">
                            <a class="btn btn-outline-dark w-100" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg> Tambah ke Cart
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
<?php get_footer(); ?>