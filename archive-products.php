<?php get_header(); ?>
<div class="bg-white py-5">
    <div class="row justify-content-evenly col-10 mx-auto product-container">
        <div class="page-title col-12">
            <h3>Produk <span class="text-subtitle text-muted fs-6 fs-light"><?php echo get_theme_mod('wp_advconfig-subtextproduk') ?></span></h3>
        </div>
        <?php
        $wp_query = new WP_Query(
            array(
                'post_type' => 'products',
                'posts_per_page' => 20,
                's' => $_GET['s']
                )
            );
            
            if($wp_query->have_posts()) {
                while($wp_query->have_posts()) {
                    $wp_query->the_post(); ?>
                    <div class="product col-xl-2 col-sm-3 col-12 shadow position-relative bg-white rounded text-secondary p-1 m-2" id="<?php the_id(); ?>">
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
                                        echo 'Rp' . number_format(get_field_object('price_field')['value'] - (get_field_object('price_field')['value'] * ( get_field_object('discount_field')['value'] / 100 )));
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
</div>
<?php get_footer(); ?>