<?php 
$portfolio = get_field('portfolio');
$args = array(
    'post_type' => 'project',
    'posts_per_page' => 3
);
$the_query = new WP_Query( $args ); 
?>

<section class="section sec3 portfolio" id="portfolio">
        <div class="main-title">
            <h2><?php echo $portfolio['portfolio_h2']; ?></h2>
        </div>
        <p class="portfolio-text">
        <?php echo $portfolio['portfolio_paragraph']; ?>
        </p>
        <div class="portfolios">
        <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="portfolio-item">
                <div class="image">
                    <img src="img/port1.jpg" alt="">
                </div>
                <div class="hover-item">
                    <h3><?php the_title(); ?></h3>
                    <div class="icons">
                        <a class="icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="icon" href="#"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php endif; ?>
        </div>
    </section>