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

$context = Timber::get_context();

$context['post'] = new Timber\Post();

Timber::render('single.twig', $context);
