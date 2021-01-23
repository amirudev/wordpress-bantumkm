<?php get_header(); ?>
<div class="single-blog col-xl-9 col-md-10 col-sm-11 mx-auto">
    <div class="card rounded p-4">
        <div class="title fs-3 fw-bold">
            <p><?php the_title(); ?></p>
        </div>
        <div class="image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content my-5">
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>