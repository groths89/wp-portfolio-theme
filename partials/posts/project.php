<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>
        <div>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
<?php }
} ?>