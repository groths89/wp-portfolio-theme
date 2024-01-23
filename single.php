<?php

get_header(); ?>

<div class="max-w-4xl mx-auto my-3 px-4 prose bg-white">
  <?php if (is_singular('project')) : ?>
    <?php get_template_part('partials/posts/project'); ?>
  <?php else : ?>
    <?php get_template_part('partials/posts/post'); ?>
  <?php endif; ?>
</div>

<?php get_footer();
