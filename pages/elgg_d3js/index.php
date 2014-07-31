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
global $CONFIG;
$url = $CONFIG->url . 'd3js/view/';

$content = '';

$content .= '<p><a href="' . $url . 'd3js_cfl" class="elgg-button elgg-button-action">Collapsible force layout</a></p>';
$content .= '<p><a href="' . $url . 'd3js_sdg" class="elgg-button elgg-button-action">Stack density graph</a></p>';
$content .= '<p><a href="' . $url . 'd3js_radar" class="elgg-button elgg-button-action">Radar chart</a></p>';


$title = elgg_echo('elgg_d3js:everyone');

$body = elgg_view_layout('one_column', array(
	'content' => $content,
	'title' => $title,
));

echo elgg_view_page($title, $body);