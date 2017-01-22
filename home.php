<?php
/**
 * Template home file
 *
 * PHP version 5
 *
 * @category Theme
 * @package  hiwelo-blog
 * @author   Damien Senger <damien@raccoon.studio>
 * @link     https://codex.wordpress.org/Template_Hierarchy
 */

$context = Timber::get_context();

$posts = new WP_Query([
    'post_type' => 'post',
]);
var_dump($posts->posts);

Timber::render('home.twig', $context);
