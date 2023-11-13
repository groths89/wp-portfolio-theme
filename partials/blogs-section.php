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
            <?php if($post_query->have_posts() ): ?>
                <?php while($post_query->have_posts()): 
                    $post_query->the_post(); ?>
                    <div class="blogs">
                        <div class="blog">
                        <?php if ( has_post_thumbnail() ):
                            the_post_thumbnail();
                            ?>
                        <?php endif; ?>
                            <div class="blog-text">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>