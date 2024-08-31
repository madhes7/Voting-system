<!DOCTYPE html>
<html>
<head>
<?php
    session_start();
    $db=new mysqli("localhost","root","","voting");
    ?>
    <link rel="stylesheet" type="text/css" href="contact.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="topnav" id="myTopnav">
                        <ul>
            <li><a class="active" href="11.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="logout.php">logout</a></li>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </ul>

</div>
<h3>Contact Form</h3>

<div class="container">
  <form action="contact.php" autocomplete="off" method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
    <label for="lname">Email id</label>
    <input type="text" id="lname" name="lastname" placeholder="Your mail.." required>
    <label for="country">Subject</label>
    <input type="text"  name="country" placeholder="subject">
          <label for="subject">Description</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required"></textarea>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>
<?php
if(isset($_POST["submit"]))
{
    $a=$_POST["firstname"];
    $b=$_POST["lastname"];
    $c=$_POST["country"];
    $d=$_POST["subject"];
    mail("$b","$c","$d");
}
?>
</body>
</html>
