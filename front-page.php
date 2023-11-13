<?php 
get_header();
?>

<?php get_template_part('partials/header', 'section'); ?>

<main>
    <?php get_template_part('partials/about', 'section'); ?>
    <?php get_template_part('partials/portfolio', 'section'); ?>
    <?php get_template_part('partials/blogs', 'section'); ?>
    <?php get_template_part('partials/contacts', 'section'); ?>
</main>

<!-- Controls Div of the Webpage -->
<div class="controls">
    <div class="control control-1 active-btn" data-id="home">
        <i class="fas fa-home"></i>
    </div>
    <div class="control control-2" data-id="about">
        <i class="fas fa-user"></i>
    </div>
    <div class="control control-3" data-id="portfolio">
        <i class="fas fa-briefcase"></i>
    </div>
    <div class="control control-4" data-id="blogs">
        <i class="fas fa-blog"></i>
    </div>
    <div class="control control-5" data-id="contact">
        <i class="fas fa-envelope"></i>
    </div>
</div>

<!-- Theme Controls of the Webpage -->
<div class="theme-controls">
    <div class="theme-control theme-control-light">
        <i class="fas fa-sun"></i>
    </div>
    <div class="theme-control theme-control-dark">
        <i class="fas fa-moon"></i>
    </div>
</div>

<?php
get_footer();
?>