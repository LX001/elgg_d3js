<?php
/**
 * View a bookmark
 *
 * @package ElggBookmarks
 */
 global $CONFIG;
$url = $CONFIG->url . 'mod/elgg_d3js/vendors/';
$liburl = $CONFIG->url . 'mod/elgg_d3js/data/';
$dataurl = $CONFIG->url . 'd3js/data';
$d3js_cfl = get_input('d3js_cfl',''); //collapsible force layout
$d3js_sdg = get_input('d3js_sdg',''); //stack density graph

switch($page[1])
{
	case $d3js_cfl :
	$content = elgg_view('elgg_d3js/collapsible_force_layout',array('data-url' => $dataurl));
	break;
	case $d3js_sdg :
	$content = elgg_view('elgg_d3js/stack_density_graph',array('data-url' => $dataurl));
	break;
}
/*
if($d3js_cfl)
{
	$content = elgg_view('elgg_d3js/collapsible_force_layout',array('data-url' => $dataurl));
}

if($d3js_sdg)
{
	$content = elgg_view('elgg_d3js/stack_density_graph',array('data-url' => $dataurl));
}
*/
$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'filter' => '',
));

echo elgg_view_page($title, $body);