<?php

function portfolio_files()
{
  wp_enqueue_script('main-portfolio-js', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('gstatic-fonts', 'https://fonts.gstatic.com');
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap');
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), true);
  wp_enqueue_style('main-portfolio-css', get_theme_file_uri('/build/index.css'));

  wp_localize_script(
    'main-portfolio-js',
    'portfolioData',
    array(
      'root_url' => get_site_url(),
      'nonce' => wp_create_nonce('wp_rest')
    )
  );
}

add_action('wp_enqueue_scripts', 'portfolio_files');

function portfolio_features()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_editor_style(array('//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap', 'build/style-index.css', 'build/index.css'));
}

function portfolio_body_class($classes)
{
  $classes[] = 'main-content';
  return $classes;
}

add_action('after_setup_theme', 'portfolio_features');
add_filter('body_class', 'portfolio_body_class');


function register_header_block_type() {
  register_block_type(
    'portfolio2023/header-section',
    array(
      'name' => 'header-section',
      'title' => __('Header Section'),
      'description' => __('A custom Header Section Block.'),
      'render_template' => 'template-parts/blocks/header/header-section.php',
      'icon' => 'editor_paste-text',
      'keywords' => array('front page', 'portfolio', 'header')
    )
    );
}

add_action('init', 'register_header_block_type');