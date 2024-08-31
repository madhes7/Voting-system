<!DOCTYPE html>
<html>
<head>
<?php
	session_start();
	$db=new mysqli("localhost","root","","voting");
	?>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sign.css">
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
   <h2><font size="5">Login</font></h2>
   <p><b><font size="4">Please enter your Name and Aadhar number</font></b></p>
   </div>
    <form id="Login" action="sign.php" method="POST" autocomplete="off">
        <div class="form-group">
            <input type="textarea" class="form-control" name="username" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="Number" class="form-control"  name="anumber" placeholder="Aadhar number">
        </div>
        <input type="submit" name="login" class="btn btn-primary" ><br>
        <br>
        <input type="submit" name="newuser" value="New User" class="btn btn-primary">
    </form>
    </div>
<?php
if(isset($_POST["login"]))
{
	$_SESSION["username"]=$_POST["username"];
	$_a=$_POST["username"];
	$_SESSION["anumber"]=$_POST["anumber"];
	$_b=$_POST["anumber"];
	$sql="SELECT *FROM users WHERE username='$_a' && anumber='$_b' && flag='0'";
		$res=$db->query($sql);
		if($res->num_rows>0)
		{
			header("location:home.php");
		}
		else
		{
			echo "invalid username or password";
		}
}

if(isset($_POST["newuser"]))
	header("location:newuser.php");
?>
</body>
</html>
