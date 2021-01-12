<?php get_header() ?>
<div class="archive-blog">
    <div class="container">
        <div class="page-title">
            <h3>Blog</h3>
            <div class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</div>
        </div>
        <div class="row">
            <?php
            $blog_query = new WP_Query(
                array(
                    'post_type' => 'blog'
                )
            );
            if($blog_query->have_posts()){
                while($blog_query->have_posts()) {
                    $blog_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <div class="card-image no-radius">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Dibuat Pada : <?php the_date(); ?></li>
                            <li class="list-group-item">Author : <?php the_author(); ?> </li>
                        </ul>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
                <?php }
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>