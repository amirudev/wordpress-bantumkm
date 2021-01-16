<?php get_header();
global $wp_query;?>
<div class="archive-container">
    <div class="container">
        <div class="page-title">
            <h3>Blog</h3>
            <div class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</div>
        </div>
        <div class="row">
            <?php
            $wp_query = new WP_Query(
                array(
                    'post_type' => 'blog',
                    'paged' => get_query_var('paged'),
                    'posts_per_page' => 6
                )
            );
            if($wp_query->have_posts()){
                while($wp_query->have_posts()) {
                    $wp_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card blog">
                        <div class="card-content">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <div class="card-image no-radius">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="info">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Dibuat Pada : <?php the_date(); ?></li>
                                <li class="list-group-item">Author : <?php the_author(); ?> </li>
                            </ul>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php wp_reset_postdata(); }
            }
            ?>
        </div>
    </div>
    <div class="button-post">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</div>
<?php get_footer(); ?>