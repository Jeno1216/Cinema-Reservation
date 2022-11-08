<?php

@include 'config.php';

session_start(); // dont forget this

?>
<?php
$connection_user = mysqli_connect('localhost','root','','user_db');
$connection_movies = mysqli_connect('localhost','root','','booking');

$db_user = mysqli_select_db($connection_user, 'user_db');
$db_movies = mysqli_select_db($connection_movies, 'booking');

if(isset($_POST['delete']))
{
    
    echo "<script>alert('Account Deleted')</script>";
    header('location:logout.php'); // php files esp with header that points to a file should be before any html code

    $query_user = "DELETE FROM user_form WHERE name = '$_SESSION[user_name]'";

    // Edit data especially email from avatar table
    $query_avatar1 = "DELETE FROM avatar WHERE name = '$_SESSION[user_name]'";

    // Edit data especially email from sonic table
    $query_sonic1 = "DELETE FROM sonic WHERE name = '$_SESSION[user_name]'";

    // Edit data especially email from jurassic table
    $query_jurassic1 = "DELETE FROM jurassic WHERE name = '$_SESSION[user_name]'";

    // Edit data especially email from adam table
    $query_adam1 = "DELETE FROM adam WHERE name = '$_SESSION[user_name]'";
    

    $query_user = mysqli_query($connection_user, $query_user);
    $query_avatar1 = mysqli_query($connection_movies, $query_avatar1);
    $query_sonic1 = mysqli_query($connection_movies, $query_sonic1);
    $query_jurassic1 = mysqli_query($connection_movies, $query_jurassic1);
    $query_adam1 = mysqli_query($connection_movies, $query_adam1);
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <script src="profile.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" type="image/png" href="sd.png" />

    <title> Systematix | Home </title>
    
</head>

<body>
<nav>
    
    <input id="nav-toggle" type="checkbox">
    <div class="logo">
        <img style=" height: 50px;" src="lgoo.png" alt="logo" id="logo">

    </div>

    <ul class="links">
        <li><a href= "index.html" >MOVIES</a></li>
        <li><a href="cinema.html">CINEMAS</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="guide.html">HELP</a></li>
        <li><a href="profile.php" id="nav_active">MY PROFILE</a></li>

    </ul>

   
    <label for="nav-toggle" class="icon-burger"> <!--this will stand as click on nav-toggle, these are the three lines-->
     <p>PROFILE</p> 

    </label>

       <!-- Change Theme: this is connected to root in css and index.js -->
       <div class="toggle-container">
        <button class="theme-btn light" onclick="setTheme('light'); PictureChangeLight();" title="Light mode">
            <img src="brightness.png" alt="">
        </button>
        <button class="theme-btn dark" onclick="setTheme('dark'); PictureChangeDark();" title="Dark mode">
            <img src="night-mode.png" alt="">
        </button>
      </div>


      <div class="profile-and-logout-container">

        <a href="logout.php"> <div class="logout-container">
            <img src="logout.png" alt="logout icon">
             <p> Log Out</p> 
          </div>
        </a> 

    </div>

</nav>



    <br><br><br><br><br>
<div class="main-container">

    <div class="my-profile-container" >
        <p> MY PROFILE </p>
        <hr id="line-header">
    </div>


    <div class="profile-details-container" >

    <div class="profile-details" style="background-image: url('profile_info.png');">
    <img class="profile-logo"src="lgoo.png" alt="">


        <?php $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, 'user_db'); 
            $sql = "SELECT * from user_form Where name = '$_SESSION[user_name]';";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo 
                    "<p class='description-name'>". $row['name']. 
                    "  </p> <p class='description-id'>". $row['id']. "  </p> ".
                    "<p class='description-email'>". $row['email']." </p> ".
                    "<p class='description-phone'>". $row['phone']." </p> ".
                    "<div class='joined-container'> <img style='width: 20px; background-color: white;' src='calendar.png'>
                    <p class='description-date_registered'> Joined ". $row["date_registered"]. " </p> </div>".
                    "<div class='birthday-container'> <img src='birthday.png' style='width: 20px;background-color: white;'>
                    <p class='description-birthdate'>". $row['birthdate']. " </p> </div>".
                    "<p class='description-address'>Lives at ". $row['address']. " </p> "
                    ;
                }
             }

             ?>

         <div class="edit_profile">
         <button Onclick="plusSlides_profile(1)" class="next"> Edit Profile </button>

    </div>

    </div>




<!-- EDIT PROFILE-->
    <div class="profile-details" style="background-image: url('profile_info.png');">
    <img class="profile-logo"src="lgoo.png" alt="">

  
    
    <form class="form-approved-container" method="POST">
        
    <div class="edit-profile-title">
        <p> EDIT PROFILE INFORMATION</p>
    </div>

    
    <div class="form-group">
            <input
              required
              type="text"
              class="form-control"
              id="email"
              name="email"
              placeholder="New Email Address"

            />
          </div>

          
          <div class="form-group">
            <input
              required
              type="text"
              class="form-control"
              id="password"
              name="password"
              placeholder="New Password"

            />
          </div>
        <div class="form-group">
            <input
              required
              type="text"
              class="form-control"
              id="phone_number"
              name="phone_number"
              placeholder="New Phone Number"

            />
          </div>

          <div class="form-group">
            <p style="color:gray; font-size:13.5px; margin-left: 5.5px; background-color:white;">New Birthdate</p>
            
            <input
              required
              type="date"
              class="form-control"
              id="birthdate"
              name="birthdate"
              placeholder="New Birth Date"

            />
          </div>

          <div class="form-group">
            <input
              required
              type="text"
              class="form-control"
              id="address"
              name="address"
              placeholder="New Address"

            />
          </div>

          

          <div class="form-group">

          <input class="update" type="submit" name="update" value="Confirm"/> </div>

        </form>
      
         <div class="edit_profile">
            <button onclick="plusSlides_profile(-1)" class="prev"> View Profile </button>
    </div>

    <div class="delete-profile">
        <form method="POST" style="    background-color: white;">
        <input class="delete-profile-button" onclick="return confirm('Are you sure?');" type="submit" name="delete" value="Delete Account"/> </div>
            </form>
    </div>




    <?php

$connection1 = mysqli_connect('localhost','root','','user_db');
$connection2 = mysqli_connect('localhost','root','','booking');

$db = mysqli_select_db($connection1, 'user_db');
$db_movies = mysqli_select_db($connection2, 'booking'); // update the email on various movies database para display dyapon
                                                        // miskin ma change email


if(isset($_POST['update']))
{
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Phone_number = $_POST['phone_number'];
    $Birthdate = $_POST['birthdate'];
    $Address = $_POST['address'];

    // Edit data on user_form table
    $query = "UPDATE user_form SET phone = '$_POST[phone_number]',
    email = '$_POST[email]', password = '$_POST[password]', birthdate = '$_POST[birthdate]', address = '$_POST[address]'
    WHERE name = '$_SESSION[user_name]' ";

    // Edit data especially email from avatar table
    $query_avatar = "UPDATE avatar SET Phone = '$_POST[phone_number]', 
    Email = '$_POST[email]', Address = '$_POST[address]'
    WHERE Name = '$_SESSION[user_name]' ";

    // Edit data especially email from sonic table
    $query_sonic = "UPDATE sonic SET Phone = '$_POST[phone_number]', 
    Email = '$_POST[email]', Address = '$_POST[address]'
    WHERE Name = '$_SESSION[user_name]' ";

    // Edit data especially email from jurassic table
    $query_jurassic = "UPDATE jurassic SET Phone = '$_POST[phone_number]', 
    Email = '$_POST[email]', Address = '$_POST[address]'
    WHERE Name = '$_SESSION[user_name]' ";

    // Edit data especially email from adam table
    $query_adam = "UPDATE adam SET Phone = '$_POST[phone_number]', 
    Email = '$_POST[email]', Address = '$_POST[address]'
    WHERE Name = '$_SESSION[user_name]' ";
    

    $query_run = mysqli_query($connection1, $query);
    $query_avatar = mysqli_query($connection2, $query_avatar);
    $query_sonic = mysqli_query($connection2, $query_sonic);
    $query_jurassic = mysqli_query($connection2, $query_jurassic);
    $query_adam = mysqli_query($connection2, $query_adam);
    
}

?>
    </div>

    <!--
JS script for showing slides.    
-->

<script>
var slideIndex_profile = 1;
showSlides_profile(slideIndex_profile);
 
function plusSlides_profile(n) {
    showSlides_profile(slideIndex_profile += n);
}
 
function currentSlide_profile(n) {
    showSlides_profile(slideIndex_profile = n);
}
 
function showSlides_profile(n) {
    var i;
    var slides = document.getElementsByClassName("profile-details");
    var dots = document.getElementsByClassName("page");
    if (n > slides.length) { slideIndex_profile = 1 }
    if (n < 1) { slideIndex_profile = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex_profile - 1].style.display = "block";
}
</script>

    </div>
    

<!-- PENDING TICKETS-->
<div class="tickets-container">
<div class="tickets-text-container">
        <p id="approved-tickets" class="page"  onclick="currentSlide(1)"> Pending Tickets</p>
        <p  class="page" onclick="currentSlide(2)"> Approved Tickets</p>
        <p  class="page" onclick="currentSlide(3)"> Declined Tickets</p>

</div>

<div class="tickets-content">

<?php
 $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, 'user_db'); 
            $select = " SELECT * FROM user_form WHERE name = '$_SESSION[user_name]' ";

            $result = mysqli_query($conn, $select);

            if(mysqli_num_rows($result) > 0){ 

            $row = mysqli_fetch_array($result);

            $Name =  $row['name'];//created this php so that we can use this to select specific data on below php
            $Email =  $row['email']; //created this php so that we can use this to select specfic data on below php

            }?>
            
<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "booking";

$conn = mysqli_connect("localhost", "root", "", "booking");

if($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

$sql_avatar = "SELECT * from avatar where Name = '$Name' AND Email = '$Email';";
$sql_sonic = "SELECT * from sonic where Name = '$Name' AND Email = '$Email';";
$sql_jurassic = "SELECT * from jurassic where Name = '$Name' AND Email = '$Email';";
$sql_adam = "SELECT * from adam where Name = '$Name' AND Email = '$Email';";

$result_avatar = $conn->query($sql_avatar);
$result_sonic = $conn->query($sql_sonic);
$result_jurassic = $conn->query($sql_jurassic);
$result_adam = $conn->query($sql_adam);


if($result_avatar->num_rows > 0 || $result_sonic->num_rows > 0
|| $result_jurassic->num_rows > 0 || $result_adam->num_rows > 0){
    
    while ($row = $result_avatar->fetch_assoc()){

        if( $row["Booking_status"] == "PENDING"){
        echo 
        '<div class="tickets">
        <img src="ticket.png" alt="png">
        <p class="ticket-name">' . $row["Name"]. '</p>'. 
        '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
        '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
        '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
        '<p class="ticket-time">' . $row["Time"]. '</p>'.
        '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
        '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
        '</div>'
        ;
        }

    }
    while ($row = $result_sonic->fetch_assoc()){

        if( $row["Booking_status"] == "PENDING"){
            echo 
            '<div class="tickets">
            <img src="ticket.png" alt="png">
            <p class="ticket-name">' . $row["Name"]. '</p>'. 
            '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
            '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
            '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
            '<p class="ticket-time">' . $row["Time"]. '</p>'.
            '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
            '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
            '</div>'
            ;
            }
        
    }
    while ($row = $result_jurassic->fetch_assoc()){

           if( $row["Booking_status"] == "PENDING"){
        echo 
        '<div class="tickets">
        <img src="ticket.png" alt="png">
        <p class="ticket-name">' . $row["Name"]. '</p>'. 
        '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
        '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
        '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
        '<p class="ticket-time">' . $row["Time"]. '</p>'.
        '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
        '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
        '</div>'
        ;
        }
        
    }
    while ($row = $result_adam->fetch_assoc()){
       
        if( $row["Booking_status"] == "PENDING"){
            echo 
            '<div class="tickets">
            <img src="ticket.png" alt="png">
            <p class="ticket-name">' . $row["Name"]. '</p>'. 
            '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
            '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
            '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
            '<p class="ticket-time">' . $row["Time"]. '</p>'.
            '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
            '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
            '</div>'
            ;
            }
    }
}
    else{
     echo "<p style='display:flex; align-items: center;'>NO TICKETS BOOKED</p>";
}

    $conn->close();
?>
</div>
</div>

<!-- CLOSE PENDING TICKETS-->




<!-- APPROVED TICKETS-->
<div class="tickets-container">
<div class="tickets-text-container">
        <p  class="page"  onclick="currentSlide(1)"> Pending Tickets</p>
        <p id="approved-tickets" class="page" onclick="currentSlide(2)"> Approved Tickets</p>
        <p  class="page" onclick="currentSlide(3)"> Declined Tickets</p>

</div>

<div class="tickets-content">
<?php
     
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "booking";

$conn = mysqli_connect("localhost", "root", "", "booking");

if($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

$sql_avatar = "SELECT * from avatar where Name = '$Name' AND Email = '$Email';";
$sql_sonic = "SELECT * from sonic where Name = '$Name' AND Email = '$Email';";
$sql_jurassic = "SELECT * from jurassic where Name = '$Name' AND Email = '$Email';";
$sql_adam = "SELECT * from adam where Name = '$Name' AND Email = '$Email';";

$result_avatar = $conn->query($sql_avatar);
$result_sonic = $conn->query($sql_sonic);
$result_jurassic = $conn->query($sql_jurassic);
$result_adam = $conn->query($sql_adam);


if($result_avatar->num_rows > 0 || $result_sonic->num_rows > 0
|| $result_jurassic->num_rows > 0 || $result_adam->num_rows > 0){
    
    while ($row = $result_avatar->fetch_assoc()){

        if( $row["Booking_status"] == "APPROVED"){
        echo 
        '<div class="tickets">
        <img src="ticket.png" alt="png">
        <p class="ticket-name">' . $row["Name"]. '</p>'. 
        '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
        '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
        '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
        '<p class="ticket-time">' . $row["Time"]. '</p>'.
        '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
        '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
        '</div>'
        ;
        }
    
    }
    while ($row = $result_sonic->fetch_assoc()){

        if( $row["Booking_status"] == "APPROVED"){
            echo 
            '<div class="tickets">
            <img src="ticket.png" alt="png">
            <p class="ticket-name">' . $row["Name"]. '</p>'. 
            '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
            '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
            '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
            '<p class="ticket-time">' . $row["Time"]. '</p>'.
            '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
            '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
            '</div>'
            ;
            }
        
    }
    while ($row = $result_jurassic->fetch_assoc()){

           if( $row["Booking_status"] == "APPROVED"){
        echo 
        '<div class="tickets">
        <img src="ticket.png" alt="png">
        <p class="ticket-name">' . $row["Name"]. '</p>'. 
        '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
        '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
        '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
        '<p class="ticket-time">' . $row["Time"]. '</p>'.
        '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
        '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
        '</div>'
        ;
        }
        
    }
    while ($row = $result_adam->fetch_assoc()){
       
        if( $row["Booking_status"] == "APPROVED"){
            echo 
            '<div class="tickets">
            <img src="ticket.png" alt="png">
            <p class="ticket-name">' . $row["Name"]. '</p>'. 
            '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
            '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
            '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
            '<p class="ticket-time">' . $row["Time"]. '</p>'.
            '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
            '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
            '</div>'
            ;
            }
    }
}
else{
    echo "<p style='display:flex; align-items: center;'>NO TICKETS BOOKED</p>";
}

    $conn->close();
?>
</div>
</div>

<!-- CLOSED APPROVED TICKETS-->




<!-- DECLINED TICKETS-->
<div class="tickets-container">
<div class="tickets-text-container">
        <p  class="page"  onclick="currentSlide(1)"> Pending Tickets</p>
        <p  class="page" onclick="currentSlide(2)"> Approved Tickets</p>
        <p id="approved-tickets" class="page" onclick="currentSlide(3)"> Declined Tickets</p>

</div>
<div class="tickets-content">
<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "booking";

$conn = mysqli_connect("localhost", "root", "", "booking");

if($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}

$sql_avatar = "SELECT * from avatar where Name = '$Name' AND Email = '$Email';";
$sql_sonic = "SELECT * from sonic where Name = '$Name' AND Email = '$Email';";
$sql_jurassic = "SELECT * from jurassic where Name = '$Name' AND Email = '$Email';";
$sql_adam = "SELECT * from adam where Name = '$Name' AND Email = '$Email';";

$result_avatar = $conn->query($sql_avatar);
$result_sonic = $conn->query($sql_sonic);
$result_jurassic = $conn->query($sql_jurassic);
$result_adam = $conn->query($sql_adam);



if($result_avatar->num_rows > 0 || $result_sonic->num_rows > 0
|| $result_jurassic->num_rows > 0 || $result_adam->num_rows > 0){
    
    while ($row = $result_avatar->fetch_assoc()){

        if( $row["Booking_status"] == "DECLINED"){
        echo 
        '<div class="tickets">
        <img src="ticket.png" alt="png">
        <p class="ticket-name">' . $row["Name"]. '</p>'. 
        '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
        '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
        '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
        '<p class="ticket-time">' . $row["Time"]. '</p>'.
        '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
        '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
        '</div>'
        ;
        }
    
    }
    while ($row = $result_sonic->fetch_assoc()){

        if( $row["Booking_status"] == "DECLINED"){
            echo 
            '<div class="tickets">
            <img src="ticket.png" alt="png">
            <p class="ticket-name">' . $row["Name"]. '</p>'. 
            '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
            '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
            '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
            '<p class="ticket-time">' . $row["Time"]. '</p>'.
            '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
            '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
            '</div>'
            ;
            }
        
    }
    while ($row = $result_jurassic->fetch_assoc()){

           if( $row["Booking_status"] == "DECLINED"){
        echo 
        '<div class="tickets">
        <img src="ticket.png" alt="png">
        <p class="ticket-name">' . $row["Name"]. '</p>'. 
        '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
        '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
        '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
        '<p class="ticket-time">' . $row["Time"]. '</p>'.
        '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
        '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
        '</div>'
        ;
        }
        
    }
    while ($row = $result_adam->fetch_assoc()){
       
        if( $row["Booking_status"] == "DECLINED"){
            echo 
            '<div class="tickets">
            <img src="ticket.png" alt="png">
            <p class="ticket-name">' . $row["Name"]. '</p>'. 
            '<p class="ticket-movie">' . $row["Movie"]. '</p>'.
            '<p class="ticket-booking_status">' . $row["Booking_status"]. '</p>'.
            '<p class="ticket-schedule">' . $row["Schedule"]. '</p>'.
            '<p class="ticket-time">' . $row["Time"]. '</p>'.
            '<p class="ticket-amount"> PHP ' . $row["Amount"]. '.00</p>'.
            '<p class="ticket-seat"> ' . $row["Seat_no"]. '</p>'.
            '</div>'
            ;
            }
    }
}
else{
    echo "<p style='display:flex; align-items: center;'>NO TICKETS BOOKED</p>";
}

    $conn->close();
?>
</div>
</div>

<!-- CLOSED DECLINED TICKETS-->





</div>








<div class="footer-main-container" style="width: 100%; height: 250px; background-color: #970909; margin-top: 0px;">
    <div class="footer-icons-container" style="width: 100%;background:none;
    display: flex; align-items: center; justify-content: center; padding-top: 30px; ">

       <a href="https://www.instagram.com/systematix.co/" target="_blank" style="width: 50px; background:none;"> 
        <img style="width: 100%; background:none;" src="instagram.png"> </a>
        
        <a href="https://www.facebook.com/Systematixco-104839155600977" target="_blank" style="width: 50px; background:none;"> 
        <img style="width: 100%; background:none;" src="facebook.png"> </a>

        <a href="mailto:systematix.co@gmail.com" target="_blank" style="width: 50px; background:none;"> 
        <img style="width: 100%; background:none;" src="message.png"> </a>

        <a href="tel:+639197750645" target="_blank" style="width: 50px; background:none;"> 
        <img style="width: 100%; background:none;" src="phone.png"> </a>

    </div>

    <div class="footer-icons-container" style="width: 100%; border-bottom: 1px solid rgb(231, 231, 231);background:none;
    display: flex; align-items: center; justify-content: center; padding-top: 10px; text-align: center;">

       <a href="index.html" style="background:none;"><p style="width: 100%; background:none; color: white; 
       padding: 10px;"> MOVIES </p> </a> 

       <a href="cinema.html" style="background:none; "><p style="width:  100%; background:none; color: white; 
       padding: 10px;"> CINEMAS </p> </a> 

        <a href="about.html" style="background:none;"><p style="width:  100%; background:none; color: white; 
        padding: 10px;"> ABOUT </p> </a> 

        <a href="guide.html" style="background:none; "><p style="width:  100%; background:none; color: white; 
        padding: 10px;"> HELP </p> </a> 
           
        <a href="profile.php" style="background:none; "><p style="width:  100%; background:none; color: white; 
        padding: 10px;"> MY PROFILE </p> </a> 
        

    </div>

    <div class="footer-icons-container" style="width: 100%; background:none;
    display: flex; align-items: center; justify-content: center; padding-top: 10px; text-align: center;">
        <p style="width: auto; background:none; color: white; padding: 10px;" > 
            <a style=" background:none; color: white;" href="terms.html">Terms & Conditions</a> |
        <a style=" background:none; color: white;" href="privacy.html">Data Privacy Policy</a> </p>
        <p style="width: auto; background:none; color: white; padding: 10px;"> 
            &#169; 2022 Systematix.Co | All Rights Reserved. </p>


    </div>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);
 
function plusSlides(n) {
    showSlides(slideIndex += n);
}
 
function currentSlide(n) {
    showSlides(slideIndex = n);
}
 
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("tickets-container");
    var dots = document.getElementsByClassName("page");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
</script>