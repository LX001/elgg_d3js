path{
	fill-opacity:0.8;
	stroke-opacity:0;
}
.vlines, .hlines{
	stroke:rgb(150,148,109);
	shape-rendering:crispEdges;
	stroke-width:1px;
	stroke-opacity:0.3;
}
.hlabels line, .vlabels line{
	stroke:rgb(150,148,109);
	shape-rendering:crispEdges;
	stroke-width:1px;
	stroke-opacity:0.7;
}
.hlabels text, .vlabels text{
	color:rgb(150,148,109);
	font-size:12px;
}
body{
	width:1150px;
	margin:10px auto;
}
svg{
	display:inline;
	float:left;
}
.legend{
	display:inline-block;
	margin:10px;
	margin-top:30px;
	margin-left:0;
	max-height:280px;
	min-width:190px;
	overflow:auto;
}
.legend table{
	border-collapse:collapse;
	border-spacing:0;
}
.legend tr, .legend td, .legend div{
	margin:0;
	padding:0;
}
.legend div{
	width:20px;
	height:20px;
	float: left;
}
.legend span{
	padding: 0 5px;
	margin:0
}
.legend tr:hover{
	background:silver;
}
.distquantdiv{
	clear:both;
	padding:10px;
	overflow:hidden;
	margin: 20px;
}
.distquantdiv h3{
	padding-left: 40px;
	margin-bottom:0;
}
.stat{
	font-size:12px;
}
