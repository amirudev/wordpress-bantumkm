<?php get_header(); ?>
<div class="row container mx-auto">
    <?php
    $blog = new WP_Query(
        array(
            'post_type' => 'blog',
            'posts_per_page' => 25,
            'offset' => 0,
            's' => $_GET['s']
        )
    );
    if ($blog->have_posts()) {
        while ($blog->have_posts()) {
            $blog->the_post();
            ?>
                <div class="col-md-6 col-sm-12 h-100 my-2 archive-blog">
                    <div class="card">
                        <div class="card-content">
                            <div class="image">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php the_title(); ?></h4>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <a class="btn btn-primary block" href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
    ?>
</div>
<?php get_footer(); ?>