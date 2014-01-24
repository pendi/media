<!DOCTYPE html>
<html>
<head>
	<title>Menu JS</title>
	<script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
	<script> 
		$(function(){
		  $(".sub-header").click(function(){
		  	$(this).find(".sub-menu").slideToggle("slow");
		  });
		});
	</script>
		 
	<style type="text/css"> 
		.header {
			width: 100%;
			display: table;
		}
		.sub-header {
			display: block;
			float: left;
			width: 100px;
		}
		.sub-menu {
			display: none;
		}
	</style>

</head>
<body>

<div class="header">
	<div class="sub-header">
		<div class="menu">Menu 1</div>
		<div class="sub-menu">Sub Menu 1</div>
		<div class="sub-menu">Sub Menu 1.1</div>
		<div class="sub-menu">Sub Menu 1.2</div>
	</div>
	<div class="sub-header">
		<div class="menu">Menu 2</div>
		<div class="sub-menu">Sub Menu 2</div>
	</div>
	<div class="sub-header">
		<div class="menu">Menu 3</div>
		<div class="sub-menu">Sub Menu 3</div>
	</div>
</div>

</body>
</html>