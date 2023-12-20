<?php
$blog = get_field('blogs');

$args = array(
    'post_type' => 'post'
);

$post_query = new WP_Query($args);
?>
<section class="section sec4 blogs-sec" id="blogs">
    <div class="blogs-content">
        <div class="main-title">
            <h2><?php echo $blog['blogs_h2']; ?></h2>
        </div>
        <?php if ($post_query->have_posts()) : ?>
            <div class="blogs">
                <?php while ($post_query->have_posts()) :
                    $post_query->the_post(); ?>
                    <div class="blog">
                        <?php if (has_post_thumbnail()) : the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/default-blogs.jpg') ?>" />
                        <?php endif; ?>
                        <div class="blog-text">
                            <h4><a href="<?php the_permalink($post) ?>"><?php the_title(); ?></a></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>