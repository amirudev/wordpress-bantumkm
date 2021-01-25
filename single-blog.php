<?php get_header(); ?>
<div class="single-blog col-xl-9 col-md-10 col-sm-11 mx-auto">
    <div class="card rounded p-4">
        <div class="text-center">
            <p class="fw-bold fs-3 fw-bold"><?php the_title(); ?></p>
            <p class="fs-6 text-muted"><?php echo get_the_date(); ?></p>
        </div>
        <div class="image w-75 mx-auto">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content my-5">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>