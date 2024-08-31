<!DOCTYPE html>
<html>
<head>
     <title>
 User Registration
	</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="view.css">
   <?php
   ob_start();
   session_start();
   $db=new mysqli("localhost","root","","voting");
   ?>
   </head>
<body>
<div class="container">
   <form action="view.php" method="POST" autocomplete="off">
      <?php
$_a=$_SESSION["username"];
 $_b=$_SESSION["anumber"];
$sql="SELECT *FROM users WHERE username='$_a' && anumber='$_b'";
$countt=$db->query($sql);
$row1= $countt->fetch_assoc();
   ?>
   <div class="row">
      <div class="col-md-3"></div>
      <div class="square">
         <div class="col-md-6">
            <h1 class="text-center" style="color: white;">USER REGISTRATION FORM</h1>
            <div class="col-md-9">
            	
        <?php echo'<img src="user_picture/'. $row1['image'] .'  " class="img-responsive" width="10%" height="5%" readonly="readonly" >'; ?>
               </div>
            <label class="label col-md-3 control-label">Username</label>
     <div class="col-md-9">
         <input type="text" class="form-control" name="username"   value="<?php echo $row1['username']?>" readonly="readonly">
      </div>
         <label class="label col-md-3 control-label">First Name</label>
      <div class="col-md-9">
         <input type="text" class="form-control" name="firstname"  value="<?php echo $row1['firstname']?>" readonly="readonly">
      </div>
      
         <label class="label col-md-3 control-label">Last Name </label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="lastname" value="<?php echo $row1['lastname']?>" readonly="readonly" >
      </div>
      
         <label class="label col-md-3 control-label">Phone Number</label>
         <div class="col-md-9">
         <input type="number" class="form-control" name="phonenumber"value="<?php echo $row1['phonenumber']?>" readonly="readonly" >
      </div>
      
         <label class="label col-md-3 control-label">Email Id</label>
         <div class="col-md-9">
         <input type="e-mail" class="form-control" name="email" value="<?php echo $row1['email']?>" readonly="readonly" >
      </div>
      
         <label class="label col-md-3 control-label">Adhaar Number</label>
         <div class="col-md-9">
         <input type="Number" class="form-control" name="anumber" value="<?php echo $row1['anumber']?>" readonly="readonly">
      </div>
      
         <label class="label col-md-3 control-label">Date Of Birth</label>
         <div class="col-md-9">
         <input type="Number" class="form-control"  value="<?php echo $row1['dateo'].$row1['month'].$row1['year']?>" readonly="readonly" >
            </div>
      
               <label class="label col-md-3 control-label">Gender</label>
               <div class="col-md-9">
         <input type="text" name="gender" class="form-control" value="<?php echo $row1['gender']?>" readonly="readonly" >
      </div>
      
         <label class="label col-md-3 control-label">Address</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="address" value="<?php echo $row1['address']?>" readonly="readonly">
      </div>
      
         <label class="label col-md-3 control-label">City</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="city" value="<?php echo $row1['city']?>" readonly="readonly" >
      </div>
      
         <label class="label col-md-3 control-label">District</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="district" value="<?php echo $row1['district']?>" readonly="readonly" >
      </div>
      
         <label class="label col-md-3 control-label">State</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="state"  value="<?php echo $row1['state']?>" readonly="readonly">
      </div>           
      
         <label class="label col-md-3 control-label">Pincode</label>
         <div class="col-md-9">
         <input type="Number" class="form-control" name="pincode" value="<?php echo $row1['pincode']?>" readonly="readonly" >
      </div>  
        <input type="submit" class="btn btn-primary" name="submit" value="submit"></div>

</div>
</div>
</form>
</div>
<?php
   if(isset($_POST["submit"]))
   {
   	header("location:sign.php");
     echo "sucess";
   }
?>
   	</body>
   	</html>



