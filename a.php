<?php
$db=new mysqli("localhost","root","","voting");
	session_start();
	$_a=$_SESSION["username"];
	$_b=$_SESSION["anumber"];
	$sql="SELECT email FROM users WHERE username='$_a' && anumber='$_b'";
		$res=$db->query($sql);
		$new=$res->fetch_assoc();
		$c=$new["email"];
		$k="UPDATE users SET flag='1' WHERE username='$_a' && anumber='$_b'";
		$db->query($k);
		if($res->num_rows>0)
		{			
	mail("$c","SAVE INDIA","YOUR VOTE HAS BEEN SUCESSFULLY REGISTERED");
}
$db->close();
$db=new mysqli("localhost","root","","voting");
	$v="SELECT congress	 from admins";
	$countt=$db->query($v);
	$new=$countt->fetch_assoc();
	$countttt=(int)$new["congress"];
	$cc=$countttt+1;
	$q="UPDATE admins SET congress='$cc' where uname='bhavani'";
$db->query($q);
header("location:logout.php");
$db->close();
?>