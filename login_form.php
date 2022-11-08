<?php
error_reporting(0); // hide all error warnings

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){ 

      $row = mysqli_fetch_array($result);

      $_SESSION['user_name'] = $row['name']; // will not change unless log out, so when we edit the name, it will not display the new and updated name when we use $_SESSION['username;];
      $_SESSION['user_address'] = $row['address'];
      $_SESSION['user_email'] = $row['email'];
      $_SESSION['user_phone'] = $row['phone'];
      $_SESSION['user_birthdate'] = $row['birthdate'];

      header('location:user_page.php'); // point to user_page.php
     
   }else{
      $error[] = 'Incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link rel="icon" type="image/x-icon" href="favicon.ico">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

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
      <h3>Login Here</h3>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <div class="fill-out" style="display: block">

      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an account? <a href="registration_form.php">Register now</a></p>
   </div>   
   </form>

   </div>

</div>

</body>
</html>