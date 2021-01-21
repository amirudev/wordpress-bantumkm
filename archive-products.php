<?php get_header() ?>
<div class="archive-container">
    <div class="product-container col-11">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h3>Produk</h3>
                    <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
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
            $product = new WP_Query(
                array(
                    'post_type' => 'products',
                    'posts_per_page' => 25,
                    'offset' => 0
                )
            );

            if($product->have_posts()) {
                while($product->have_posts()) {
                    $product->the_post(); ?>
                <div class="product col-xl-2 col-sm-3 col-5 shadow">
                    <div class="product-image">
                        <?php if(has_post_thumbnail()){
                            echo the_post_thumbnail();
                        } else { ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/no-image.png"></img>
                        <?php } ?>
                    </div>
                    <div class="product-info">
                        <div class="product-title">
                            <span><?php the_title(); ?></span>
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
                                echo '<span class="badge bg-success">' . $promo . '</span> ';
                            } ?>
                        </div>
                        <div class="product-addr">
                            <span>
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
                <?php }
            }
            ?>
        </div>
        <div class="button-post">
            <?php previous_posts_link(); ?>
            <?php next_posts_link(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>