<?php get_header(); ?>
<div class="archive-container mt-5">
    <div class="product-container col-11 mx-auto">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>Produk</h3>
                    <p class="text-subtitle text-muted"><?php echo get_theme_mod('wp_advconfig-subtextproduk') ?></p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <form class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ketik Nama Produk Disini" aria-label="Ketik Nama Produk Disini" aria-describedby="button-addon2" name="s">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
            </form>
        </div>
        <div class="row justify-content-between">
            <?php
            $temp_query = $wp_query;

            $wp_query = new WP_Query(
                array(
                    'post_type' => 'products',
                    'posts_per_page' => 25,
                    's' => $_GET['s'],
                    'paged' => $paged,
                )
            );

            if($wp_query->have_posts()) {
                while($wp_query->have_posts()) {
                    $wp_query->the_post(); ?>
                <div class="product col-xl-2 col-sm-3 col-5 shadow position-relative bg-white rounded text-secondary m-2 p-1" id="<?php the_id(); ?>">
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
                            </a>
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
                    </div>
                    <?php  }       
            } $wp_query = $temp_query; ?>
        </div>
        <div class="button-post mx-auto my-2">
            <?php previous_posts_link('« Halaman Sebelumnya'); ?>
            <?php next_posts_link('Halaman Selanjutnya »', $wp_query->max_num_pages); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>