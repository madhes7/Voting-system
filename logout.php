<!DOCTYPE html>
<html>
<head>
	
	<title>
		voting system
	</title>
	<link rel="stylesheet" type="text/css" href="logout.css">
	<script>
		history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>

</head>
<body>
	
		<div class="container"><i><font size="25">Your voting is done</font></i><br><br>
	<form action="logout.php" method="POST">
		<button type="submit" name="finish" style="background-color:black;color:white;width:30px; height: 20px;font-size: 25px;float: left;width: 40%;height: 100%;font-style: italic;" class="container" >Finish</button><br><br>
		<button type="submit" name="nextuser" style="background-color:black;color:white;width:30px; height: 20px;font-size: 25px;float: left;width: 50%;height: 100%;font-style: italic;" class="container">Next user</button>
	
    </form>
</div>

		<?php
	if(isset($_POST["finish"]))
	header("location:index.php");
	if(isset($_POST["nextuser"]))
		header("location:sign.php");

	?>

</body>
</html>