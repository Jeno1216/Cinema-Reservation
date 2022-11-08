<?php
error_reporting(0); // hide all error warnings

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);

   // will not allow two or more than register account with the same email OR name.
   $select = " SELECT * FROM user_form WHERE email = '$email' || name = '$name' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'Password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, address, email, phone, birthdate, password) 
         VALUES('$name', '$address', '$email', '$phone', '$birthdate', '$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php'); // point to login_form.php
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register form</title>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="registration_form.js"></script>
   <link rel="icon" type="image/x-icon" href="favicon.ico">

</head>
<body>
   <div class="main-container">

   <div class="image-container" style="background-image: url('registration_bg.jpg');" >
<img src="logocolumn.png" alt="">
</div>

<div class="form-container" >

<div style="width:100%;text-align:left;">
<img src="logoonly.png" alt="" style="width:90px;">
</div>

   <form action="" method="post">

      <h3>Register Here</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <div class="fill-out" style="display: block">
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="text" name="phone" required placeholder="Enter your phone number">
      <input type="text" name="address" required placeholder="Enter your address">
      <p style="font-size: 15px; text-align: left; padding-left:10px;">Enter your birthdate</p>
      <input type="date" name="birthdate" required placeholder="Enter your birthdate">
      <div id="next"><button onclick="plusSlides(-1)" class="next">Next</button></div>

      </div>

      <div class=" fill-out">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      <div id="prev"> <button onclick="plusSlides(1)"class="prev">Back</button> </div>
      <input type="submit" name="submit" value="register now" class="form-btn">

      </div>
      <p>Already have an account? <a href="login_form.php">Login now</a></p>
    
   </form>

</div>
</div>

</body>
</html>