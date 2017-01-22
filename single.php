<?php
/**
 * Template post file
 *
 * PHP version 5
 *
 * @category Theme
 * @package  hiwelo-blog
 * @author   Damien Senger <damien@raccoon.studio>
 * @link     https://codex.wordpress.org/Template_Hierarchy
 */

// redirect check
if (get_field('content_external') === 'yes') {
    http_response_code(get_field('content_redirection'));
    header('Location: ' . get_field('content_url'));
    exit;
}

$context = Timber::get_context();

$context['post'] = new Timber\Post();

Timber::render('single.twig', $context);
