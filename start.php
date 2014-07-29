<?php
/* d3js plugin
* 
 * @author : 
 */

// Initialise log browser
elgg_register_event_handler('init','system','elgg_d3js');

/* Initialise the theme */
function elgg_d3js(){
	global $CONFIG;
	
	// CSS et JS
	elgg_extend_view('css/elgg', 'elgg_d3js/css');
	
/*
	elgg_register_js('elgg_d3js:dialog', '/mod/elgg_d3js/vendors/d3js/soap/include/dialog.js', 'head');
	elgg_load_js('elgg_d3js:dialog');
	
	//elgg_load_js('lightbox');
	//elgg_load_css('lightbox');

	// Custom d3js functions
	elgg_register_library('elgg:elgg_d3js', elgg_get_plugins_path() . 'elgg_d3js/lib/elgg_d3js.php');
	
	// d3js widgets - add only if enabled
	if (elgg_get_plugin_setting('widget_mine', 'elgg_d3js') == 'yes') 
	elgg_register_widget_type('elgg_d3js_mine', elgg_echo('elgg_d3js:widget:d3js_mine'), elgg_echo('elgg_d3js:widget:d3js_mine:details'), 'dashboard', false);
*/	
	// d3js page handler
	elgg_register_page_handler('d3js', 'elgg_d3js_page_handler');

}


function elgg_d3js_page_handler($page) {
	$base = elgg_get_plugins_path() . 'elgg_d3js/pages/elgg_d3js';
	switch($page[0]) {
		case 'data':
			if (!include_once "$base/data.php") return false;
			break;
		case 'view':
			if (!include_once "$base/view.php") return false;
			break;
		case 'edit':
			if (!include_once "$base/edit.php") return false;
			break;
		default:
			if (!include_once "$base/index.php") return false;
	}
	return true;
}



