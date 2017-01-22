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

// search the last article
$context['last'] = new Timber\Post((new WP_Query([
    'post_type' => 'post',
]))->post);

// we search each categories to promote on the frontpage screen
$fields = get_fields();
$context['meta'] = $fields;
$context['left'] = new Timber\Post((new WP_Query([
    'post_type' => 'post',
    'category_name' => $fields['category_left']->slug,
    'post__not_in' => [$context['last']->id],
]))->post);
$context['right'] = new Timber\Post((new WP_Query([
    'post_type' => 'post',
    'category_name' => $fields['category_right']->slug,
    'post__not_in' => [$context['last']->id, $context['left']->id],
]))->post);

Timber::render('frontpage.twig', $context);
