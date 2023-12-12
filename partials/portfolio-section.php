<?php
$portfolio = get_field('portfolio');
$args = array(
    'post_type' => 'project',
    'posts_per_page' => 3
);
$the_query = new WP_Query($args);
?>

<section class="section sec3 portfolio" id="portfolio">
    <div class="main-title">
        <h2><?php echo $portfolio['portfolio_h2']; ?></h2>
    </div>
    <p class="portfolio-text">
        <?php echo $portfolio['portfolio_paragraph']; ?>
    </p>
    <div class="portfolios">
        <?php if ($the_query->have_posts()) : ?>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="portfolio-item">
                    <div class="image">
                        <?php if (has_post_thumbnail()) : the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="<?php esc_url(get_template_directory_uri() . '/images/default-projects.jpg') ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="hover-item">
                        <h3><?php the_title(); ?></h3>
                        <div class="icons">
                            <a class="icon" href="<?php echo esc_attr(the_permalink($post)); ?>"><i class="fas fa-info"></i></a>
                            <a class="icon" href="<?php echo esc_attr(get_field('github_link')); ?>"><i class="fab fa-github"></i></a>
                            <a class="icon" href="<?php echo esc_attr(get_field('external_project_link')); ?>"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php endif; ?>
    </div>
</section>