<?php
/**
 * Elgg plugin everyone page
 *
 * @package Elggd3js
 */

/*
elgg_pop_breadcrumb();
elgg_push_breadcrumb(elgg_echo('d3js'));
*/


$content = elgg_list_entities(array(
	'type' => 'object',
	'subtype' => 'd3js',
	'full_view' => false,
	'view_toggle_type' => false,
));

if (!$content) {
	$content = elgg_echo('elgg_d3js:none');
}

$title = elgg_echo('elgg_d3js:everyone');

$body = elgg_view_layout('content', array(
	'filter_context' => 'all',
	'content' => $content,
	'title' => $title,
	'sidebar' => elgg_view('d3js/sidebar'),
));

echo elgg_view_page($title, $body);