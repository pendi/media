<!DOCTYPE html>
<html>
<head>
	<title>Contoh Dropdown</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
	<script>
		$(document).ready(function(){
		  $("#hide").click(function(){
		    $("p").hide();
		  });
		  $("#show").click(function(){
		    $("p").show();
		  });
		});
	</script>
</head>
<body>
<ul class="dropmenu">
	<li><a href="#1">Menu 1</a>
		<ul>
			<li><a href="#11">Sub Menu 1</a></li>
			<li><a href="#12">Sub Menu 2</a></li>
		</ul>
	</li>
	<li><a href="#2">Menu 2</a>
		<ul>
			<li><a href="#21">Sub Menu 1</a></li>
			<li><a href="#22">Sub Menu 2</a></li>
			<li><a href="#23">Sub Menu 3</a></li>
			<li><a href="#24">Sub Menu 4</a></li>
		</ul>
	</li>
	<li><a href="#3">Menu 3</a>
		<ul>
			<li><a href="#31">Sub Menu 1</a></li>
			<li><a href="#32">Sub Menu 2</a></li>
			<li><a href="#33">Sub Menu 3</a></li>
		</ul>
	</li>
	<li><a href="#4">Menu 4</a>
		<ul>
			<li><a href="#41">Sub Menu 1</a></li>
			<li><a href="#42">Sub Menu 2</a></li>
			<li><a href="#43">Sub Menu 3</a></li>
		</ul>
	</li>
</ul>
<p>If you click on the "Hide" button, I will disappear.</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
</body>
</html>