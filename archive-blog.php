<?php get_header();
global $wp_query;?>
<div class="archive-container mt-5 col-11 mx-auto">
    <div class="page-title">
        <div class="row">
            <div class="col-12">
                <h3 class="">Blog Dan Berita</h3>
                <p class="text-subtitle text-muted">Bootstrap’s cards provide a flexible and extensible content container with multiple variants and options.</p>
            </div>
        </div>
    </div>
    <div class="row blog">
        <div class="col-12 card blog p-3">
        <?php
            $display_blog = new WP_Query(
                array(
                    'post_type' => 'blog',
                    'posts_per_page' => 5
                )
            );
            
            if($display_blog->have_posts()) {
                while($display_blog->have_posts()) {
                    $display_blog->the_post(); ?>
            <div class="m-3 pb-4 row border-bottom border-2">
                <div class="col-sm-3 blog-image">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="col-sm-9">
                    <a href="<?php the_permalink(); ?>" class="plain-link">
                    <h3 class="card-title"><?php the_title(); ?></h3>
                    <p class="card-text border-bottom"><?php the_excerpt(); ?></p>
                    </a>
                </div>
            </div>
            <?php }
            } ?>
        </div>
    </div>
    <div class="button-post my-5 mx-auto">
        <?php previous_posts_link(); ?>
        <?php next_posts_link(); ?>
    </div>
</div>
<?php get_footer(); ?>