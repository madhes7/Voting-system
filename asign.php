<!DOCTYPE html>
<html>
<head>
<?php
	$db=new mysqli("localhost","root","","voting");
	session_start();
	?>
	<link rel="stylesheet" type="text/css" href="asign.css">
	<title>Voting</title>
	<script>
		history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
	</script>
	</head>

<body id="LoginForm">
<div class="container">
<h1 class="form-heading">LOGIN FORM</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2><font size="5">Admin Login</font></h2>
   <p><font size="4">Please enter your Name and Password</font></p>
   </div>
    <form id="Login" action="asign.php" method="POST" autocomplete="off">
        <div class="form-group">
            <input type="text" class="form-control" name="uname" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="password" placeholder="Password">
        </div>
        <input type="submit" name="submit" class="btn btn-primary"><br>
        <br>
    </form>
    </div>
<?php
if(isset($_POST["submit"]))
{
	$_a=$_POST["uname"];
	$sql="select *from admins where uname='$_a'&& password='{$_POST["password"]}'";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			header("location:result.php");
		}
	}
		?>
</body>
</html>