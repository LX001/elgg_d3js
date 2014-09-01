<?php
/*
Taken from http://bl.ocks.org/mbostock/3887235#index.html
*/

$liburl = $vars['url'] . 'mod/elgg_d3js/data/';
$dataurl = elgg_extract('dataurl', $vars, $vars['url'] . 'd3js/data');

global $elgg_d3js_unique_id;
if(!isset($elgg_d3js_unique_id)) $elgg_d3js_unique_id = 1;
else $elgg_d3js_unique_id++;
$id = 'd3js_chart_' . $elgg_d3js_unique_id;

$content = '	<div id="' . $id . '"></div>
<style>

.arc path {
  stroke: #fff;
}
	#' . $id . ' {
		top: 50px;
		left: 100px;
	}
	

</style>
<script>

var width = 500,
    height = 400,
    radius = Math.min(width, height) / 2;

var color = d3.scale.ordinal()
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

var arc' . $elgg_d3js_unique_id . '= d3.svg.arc()
    .outerRadius(radius - 10)
    .innerRadius(0);

var pie = d3.layout.pie()
    .sort(null)
    .value(function(d) { return d.size; });

var svg = d3.select("#' . $id . '").append("svg")
    .attr("width", width)
    .attr("height", height)
  .append("g")
    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");

d3.json("' . $dataurl . '", function(error, data) {

  data.forEach(function(d) {
    d.size = +d.size;
  });

  var g = svg.selectAll(".arc' . $elgg_d3js_unique_id . '")
      .data(pie(data))
    .enter().append("g")
      .attr("class", "arc' . $elgg_d3js_unique_id . '");

  g.append("path")
      .attr("d", arc' . $elgg_d3js_unique_id . ')
      .style("fill", function(d) { return color(d.data.name); });

  g.append("text")
      .attr("transform", function(d) { return "translate(" + arc' . $elgg_d3js_unique_id . '.centroid(d) + ")"; })
      .attr("dy", ".35em")
      .style("text-anchor", "middle")
      .text(function(d) { return d.data.name; });

});

</script>'
;
echo $content;