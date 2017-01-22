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

// search the 3 last published posts
$context['posts'] = new Timber\PostQuery([
    'post_type' => 'post',
    'post_per_page' => 3,
]);

Timber::render('frontpage.twig', $context);
