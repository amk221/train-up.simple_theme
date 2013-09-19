<?php

error_reporting(0);

global $wp_query;

$post = new WP_Post((object)array(
  'post_content' => __('Page not found'),
  'post_title' => '404'
));

$wp_query->queried_object = $post;  
$wp_query->is_single = true;
$wp_query->is_404 = false;
$wp_query->posts = array($post);

get_template_part('index');
