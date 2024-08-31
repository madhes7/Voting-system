<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	$db=new mysqli("localhost","root","","voting");
	?>
	<title>
		voting system
	</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script>
		history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	</head>
<body>

		<p>VOTING SYSTEM</p>
		<div class="container">
			<form action="index.php" method="POST">
				<button type="submit" name="users" style="background-color:pink;color:black;width:30px; height: 20px;font-size: 25px;float: left;width: 20%;height: 100%;font-style: italic;" >users</button>
		<button type="submit" style="background-color:pink;color:black;width:30px;height: 20px;font-size: 25px;float: right;width: 22%;height: 100%;font-style: italic;" name="admin">admin</button>
			</form>
		</div>
	<?php
if(isset($_POST["users"]))
	{
		header("location:sign.php");
	}
	if(isset($_POST["admin"]))
	{
		header("location:asign.php");
	}
?>

</body>
</html>