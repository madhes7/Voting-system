<!DOCTYPE html>
<html>
<head>
     <title>
New User Registration
   </title><meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="newuser.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php
   ob_start();
    session_start();
   $db=new mysqli("localhost","root","","voting");

   ?>
   <script>
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
  </script>
  </head>
<body>
<div class="container">
  <form action="newuser.php" method="POST" autocomplete="off" enctype="multipart/form-data">
      <div class="row">
      <div class="col-md-3"></div>
      <div class="square">
         <div class="col-md-6">
            <h1 class="text-center" style="color: white;">USER REGISTRATION FORM</h1>
            <label class="label col-md-3 control-label">Username</label>
     <div class="col-md-9">
         <input type="text" class="form-control" name="username"  placeholder="Enter User Name" required>
      </div>
         <label class="label col-md-3 control-label">First Name</label>
      <div class="col-md-9">
         <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required>
      </div>
      
         <label class="label col-md-3 control-label">Last Name </label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required>
      </div>
      
         <label class="label col-md-3 control-label">Phone Number</label>
         <div class="col-md-9">
         <input type="number" class="form-control" name="phonenumber" placeholder="Enter Phone Number" required>
      </div>
      
         <label class="label col-md-3 control-label">Email Id</label>
         <div class="col-md-9">
         <input type="e-mail" class="form-control" name="email" placeholder="Enter Email Id" required>
      </div>
      
         <label class="label col-md-3 control-label">Aadhar Number</label>
         <div class="col-md-9">
         <input type="Number" class="form-control" name="anumber" placeholder="Enter Adhaar Number"required>
      </div>
      
         <label class="label col-md-3 control-label">Date Of Birth</label>
         <div class="col-md-9">
         <input type="Number" class="form-control" name="dateo" min="1" max="31" placeholder="Date" required>
         <input type="Number" class="form-control" name="month" min="1" max="12" placeholder="month" required>
         <input type="Number" class="form-control" name="year" min="1900" max="2023" placeholder="year" required>
            </div>
      
               <label class="label col-md-3 control-label">Gender</label>
               <div class="col-md-9">
         <input type="radio" name="gender" class="form-control" value="male">Male
        <input type="radio" name="gender" class="form-control" value="female">Female
      </div>
      
         <label class="label col-md-3 control-label">Address</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
      </div>
      
         <label class="label col-md-3 control-label">City</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="city" placeholder="Enter city" required>
      </div>
      
         <label class="label col-md-3 control-label">District</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="district" placeholder="Enter District" required>
      </div>
      
         <label class="label col-md-3 control-label">State</label>
         <div class="col-md-9">
         <input type="text" class="form-control" name="state" value="Tamil Nadu" readonly>
      </div>           
      
         <label class="label col-md-3 control-label">Pincode</label>
         <div class="col-md-9">
         <input type="Number" class="form-control" name="pincode" placeholder="Enter pincode" required>
      </div>  
      <div class="col-md-9">
       <input name="user_pictures" type="file" accept="image/*" />
               </div>
                      <input type="submit" class="btn btn-primary" name="submit" value="submit"></div>

</div>
</div>
</form>
</div>
<?php
   if(isset($_POST["submit"]))
   {
        $_SESSION['username']=$_POST["username"];
      $_SESSION['anumber']=$_POST["anumber"];
      $_SESSION['email']=$_POST["email"];
   $_a=$_POST["username"];
   $_b=$_POST["firstname"];
   $_c=$_POST["lastname"];
   $_d=$_POST["phonenumber"];
   $_e=$_POST["email"];
   $_f=$_POST["anumber"];
   $_g=$_POST["dateo"];
   $_h=$_POST["month"];
   $_i=$_POST["year"];
   $_j=$_POST["gender"];
   $_k=$_POST["address"];
   $_l=$_POST["city"];
   $_m=$_POST["district"];
   $_n=$_POST["state"];
   $_o=$_POST["pincode"];
   $_p=$_POST["user_pictures"];
     $imgFile = $_FILES['user_pictures']['name'];
    $tmp_dir = $_FILES['user_pictures']['tmp_name'];
    $imgSize = $_FILES['user_pictures']['size'];
    if(empty($imgFile)){
      $errMSG = "Please Select Image File.";
    }
    else
    {
 $upload_dir = 'user_picture/';   
      $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));  
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
          $userpic = rand(1000,1000000).".".$imgExt;
          if(in_array($imgExt, $valid_extensions)){     
            if($imgSize < 5000000)        {
          move_uploaded_file($tmp_dir,$upload_dir.$userpic);
        }
        else{
          $errMSG = "Sorry, your file is too large.";
        }
      }
      else{
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";    
      }
 
}
      $query="INSERT INTO users(username,firstname,lastname,phonenumber,email,anumber,dateo,month,year,gender,address,city,district,state,pincode,image,flag) VALUES ('$_a','$_b','$_c','$_d','$_e','$_f','$_g','$_h','$_i','$_j','$_k','$_l','$_m','$_n','$_o','$userpic','0')";
       $db->query($query);
   header("location:view.php");
   ob_end_flush();
   }
?>
    </body>
    </html>



     

