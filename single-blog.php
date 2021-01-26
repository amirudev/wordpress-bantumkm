<?php get_header(); ?>
<div class="single-blog bg-white py-3">
    <div class="px-5">
        <div class="title">
            <p class="fs-3 fw-bold"><?php echo get_the_title(); ?></p>
        </div>
        <div class="author ms-5 text-secondary">
            <p><?php echo get_the_author_meta(); ?><br>Posted on <?php echo get_the_date(); ?></p>
        </div>
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content py-3">
            <?php echo the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>