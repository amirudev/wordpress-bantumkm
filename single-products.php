<?php get_header(); ?>
<div class="bg-white mb-5">
    <div class="col-12 container single-product pt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-1">
                <li class="breadcrumb-item"><a href="../..">Home</a></li>
                <li class="breadcrumb-item"><a href="..">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
            </ol>
        </nav>
        <hr>
        <div class="product row">
            <div class="product-image col-12 col-md-5 p-4">
                <?php if(has_post_thumbnail()){
                    echo the_post_thumbnail();
                } else { ?>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/no-image.png" class="col-12 col-md-5">
                <?php } ?>
            </div>
            <div class="product-infoheader p-4 col-12 col-md-7">
                <div class="title">
                    <p class="fs-2"><?php echo get_the_title(); ?></p>
                </div>
                <div class="price">
                    <p class="fs-3 fw-bold text-success">
                        <?php if(get_field_object('price_field')['value']){
                            echo 'Rp' . number_format(get_field_object('price_field')['value']);
                        } else {
                            echo 'Gratis';
                        } ?> <span class="fs-6 text-danger product-discount">
                            <?php if(get_field_object('price_field')['value']){
                                echo 'Rp' . number_format(get_field_object('price_field')['value'] + get_theme_mod('wp_advconfig-discount'));
                            } else {
                                echo 'Rp' . number_format(get_theme_mod('wp_advconfig-discount'));
                            } ?>
                        </span></p>
                </div>
                <div class="promo">
                    <div class="product-badge w-100">
                        <?php foreach(get_field_object('promo_field')['value'] as $promo){
                            echo '<span class="badge bg-success">' . $promo . '</span> ';
                            $feature .= ' ' . $promo;
                        } ?>
                    </div>
                </div>
                <hr>
                <div class="action">
                    <div class="btn btn-success w-100" id="whatsappbutton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg>
                        Beli Sekarang
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="product-information p-3 my-2 row">
            <h4 class="fw-bold col-12 col-sm-5">Informasi Barang<hr class="w-25"></h4>
                <div class="product-description col-12 col-sm-7">
                    <div class="promo mb-4">
                        <h5 class="fw-bold">Promo yang kamu dapatkan</h5>
                            <div class="product-badge w-100">
                            <?php foreach(get_field_object('promo_field')['value'] as $promo){
                                echo '<span class="badge bg-success">' . $promo . '</span> ';
                                $feature .= ' ' . $promo;
                            } ?>
                        </div>
                    </div>
                    <h5 class="fw-bold">Deskripsi</h5>
                    <?php echo get_the_content(); ?>
                </div>
        </div>
    </div>
</div>
<?php 
get_footer();
require('template-parts/products-orderform.php');
?>