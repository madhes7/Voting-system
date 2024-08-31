<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="home.css">
	<?php
	session_start();
	$db=new mysqli("localhost","root","","voting");
	error_reporting( ~E_NOTICE );
	?>
		<title> voting</title>
		<script>
		history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>		
</head>
<body>
	<div class="topnav" id="myTopnav">
			 			<ul>
			<li><a class="active" href="#home">Home</a></li>
				<li><a href="contact.php">Contact</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="logout.php">logout</a></li>
			<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	</ul>

</div>
<script>
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
		<form method="POST" action="11.php">
			<div class="container">
				<div class="row">
					<div class="column">
  			<a href="a.php" ><img src="congress.png" class="image"  style="width: 20%"   ></a></div>
  			<div class="column">
	<a href="b.php"><img src="dmk.png" position="right" class="image" style="width: 20%"></a></div></div>
	<div class="row">
	<div class="column">
<a href="c.php"><img src="n.png" class="image"  style="width: 50%"></a></div>
<div class="column">
		<a href="d.php"><img src="aam.png" class="image"  style="width: 20%"></a></div></div>
		<div class="row">
		<div class="column">
		<a href="e.php"><img src="bjp.png" class="image"  style="width: 20%"></a></div>
		<div class="column">
		<a href="f.php"><img src="b.png" class="image"  style="width: 20%"></a>
	</div>
</div>
</div>
</form>

  </body>
</html>
