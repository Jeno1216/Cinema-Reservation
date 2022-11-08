<?php
error_reporting(0); // hide all error warnings

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container" >

   <div class="content" >
      <h3>Hi, <span><?php echo $_SESSION['user_name'] ?></span></span></h3>
      <h1>Welcome to <span> Systematix.Co</span></h1>
      <a href="index.html" class="btn">Explore</a>
      
   </div>

</div>

</body>
</html>