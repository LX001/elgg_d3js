<?php
/**
 * View a bookmark
 *
 * @package ElggBookmarks
 */
 global $CONFIG;

$data_url = $CONFIG->url . 'mod/elgg_d3js/data/';
$dataurl = $CONFIG->url . 'd3js/data';

$viztype = get_input('viztype',''); 

elgg_push_breadcrumb(elgg_echo('elgg_d3js'), '/d3js');
if (!empty($viztype)) elgg_push_breadcrumb(elgg_echo($viztype));

elgg_load_js('elgg:elgg_d3js');


switch($viztype)
{
	case 'd3js_cfl' :
		$data_url = $dataurl;
		$content = elgg_view('elgg_d3js/collapsible_force_layout',array('dataurl' => $data_url));
		break;
	case 'd3js_sdg' :
		$data_url .= 'SDGdata.js';
		$content = elgg_view('elgg_d3js/stack_density_graph',array('dataurl' => $data_url));
		break;
	case 'd3js_radar' :
		$data_url .= 'radardata.js';
		$content = elgg_view('elgg_d3js/radar_chart',array('dataurl' => $data_url));
		break;
	default :
		register_error("Aucune visualisation choisie");
		forward('d3js');
}

$body = elgg_view_layout('one_column', array(
	'content' => $content,
	'title' => $title,
));

echo elgg_view_page($title, $body);
