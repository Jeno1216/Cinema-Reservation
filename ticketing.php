<?php
error_reporting(0); // hide all error warnings

@include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ticketing.css">
    <script src="ticketing.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link rel="shortcut icon" type="image/png" href="sd.png" />

    <title> Booking Tickets </title>
    
</head>

<body> <nav>
    
    <input id="nav-toggle" type="checkbox">
    <div class="logo">
        <img style=" height: 50px;" src="lgoo.png" alt="logo" id="logo">

    </div>

    <ul class="links">
        <li><a href= "index.html" >MOVIES</a></li>
        <li><a href="cinema.html">CINEMAS</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="guide.html">HELP</a></li>
        <li><a href="profile.php">MY PROFILE</a></li>

    </ul>

   
    <label for="nav-toggle" class="icon-burger"> <!--this will stand as click on nav-toggle, these are the three lines-->
     <p>BOOKING</p> 

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

<div class="main-container " >

<div class="all-cinema-locations-container">
        <p> BOOKING FORM </p>
        <hr id="line-header">
    </div>

<div class="main-container-contents " >

<div class="left-image-container" style="background-image: url('left_image.jpg');">
    </div>

    <form class="form-container" id="form-container"  method="POST" >

        <img src="lgoo.png" alt="" id="book-logo">

        <div class="ticket-form-title">
          <p >TICKET RESERVATION</p>
        </div>
        
        <div class="fill-out" style="display: block;">
        <div class="form-group">
            <label class="label" for="Movie"> CHOOSE MOVIE* </label>
            <select id="Movie" name="Movie">
                <option value="AVATAR: WAY OF WATER">AVATAR: WAY OF WATER</option>
                <option value="SONIC HEDGEHOG 2">SONIC HEDGEHOG 2</option>
                <option value="JURASSIC WORLD DOMINION"> JURASSIC WORLD DOMINION</option>
                <option value="BLACK ADAM">BLACK ADAM</option>
                </select>
                <div id="next"><button onclick="plusSlides(1)" class="next">Next</button></div>
          </div>
          </div>
      
          <?php $connection = mysqli_connect("localhost", "root", "");
            $db = mysqli_select_db($connection, 'user_db'); 
            $select = " SELECT * FROM user_form WHERE name = '$_SESSION[user_name]' ";

            $result = mysqli_query($conn, $select);

            $row = mysqli_fetch_array($result);
              echo "
              <div class='fill-out'>

              <div class='form-group'>
              <p class='label'>NAME*</p>
              <p class='default-info'>"
              
              . $row['name']. '</p></div>'
              
              ;

              echo "
              
              <div class='form-group'>
              <p class='label'>EMAIL*</p>
              <p class='default-info'>"
              
              . $row['email']. '</p></div>'
              
              ;

              echo "
              
              <div class='form-group'>
              <p class='label'>CONTACT NUMBER*</p>
              <p class='default-info'>"
              
              . $row['phone']. '</p></div>'
              
              ;
          
              echo "
              
              <div class='form-group'>
              <p class='label'>ADDRESS*</p>
              <p class='default-info'>"
              
              . $row['address']. '</p>
              
              <div class="inline-next-prev"><button onclick="plusSlides(1)" class="inline-next">Next</button>
              <button onclick="plusSlides(-1)" class="inline-prev">Back</button></div>
              </div>

              

                      </div>
              '
              
              ;
          

            ?>
          <div class="fill-out">
          <div class="form-group">
            <label  class="label" for="Schedule">CHOOSE SCHEDULE* (minimum of 3 days after ticket submission) </label>
            <input
              required
              type="date"
              class="form-control"
              id="Schedule"
              name="Schedule"
              style="color: gray;"
            />
          </div>

          <div class="form-group">
            <label class="label" for="Time"> CHOOSE TIME SCHEDULE*</label>
    
            <select id="Time" name="Time">
                <option value="10:00 am">10:00 am</option>
                <option value="2:00 pm"> 2:00 pm</option>
                <option value="6:00 pm"> 6:00 pm</option>

                </select>
          </div>

         

          <div class="form-group">
            <label class="label" for="Cinema"> CHOOSE CINEMA* </label>
            <select id="Cinema" name="Cinema">
                <option value="Iloilo City">Iloilo City</option>
                <option value="Quezon City">Quezon City</option>
                <option value="Manila">Manila </option>
                <option value="Baguio City">Baguio City</option>
                <option value="Vigan City">Vigan City</option>
                <option value="Davao City">Davao City</option>
                <option value="Cagayan De Oro">Cagayan De Oro</option>
                <option value="Puerto Princesa">Puerto Princesa</option>


                </select>
          </div>
          
          <div class="form-group">
            <label class="label" for="Movie">AMOUNT TO PAY* </label>
            <p style="    width: 100%;
    height: 30px;
    border-radius: 5px;
    padding: 8px;
    font-size: 12px;
    color: gray;" >PHP 350.00 / ticket</p>
            <div class="inline-prev-submit"><button onclick="plusSlides(-1)" class="prev-inline">Back</button>
            <input type="submit" id="button" name="submit" class="submit-inline" /></div>

        </div>

</div>
          </div>

    </form>
    
        </div>
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

    </body>
    </html>

    
<?php
// got these data from php written before this php
$Name =  $row['name'];
$Email =  $row['email'];
$Phone = $row['phone'];
$Address =  $row['phone'];

// For VarChar's and Numbers
$Schedule = $_POST['Schedule'];
$Time = $_POST['Time'];
$Movie = $_POST['Movie'];
$Cinema = $_POST['Cinema'];



// should not be empty
if (!empty($Name) || !empty($Address) || !empty($Email) || !empty($Phone) || !empty($Schedule) || !empty($Time)
|| !empty($Movie) || !empty($Cinema) ){

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "booking";

}

else{

	echo "All field are required";
	die;

}

// Database connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

if(mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_errno(). ')'. mysqli_connect_error());
}
else if($Movie == "AVATAR: WAY OF WATER") {
	$SELECT = "SELECT id From avatar Where id = ?"; 
	$INSERT = "INSERT into avatar (Name, Address, Email, Phone, Schedule, Time, Movie, Cinema) 
	values(?, ?, ?, ?, ?, ?, ?, ?)";	
}
else if($Movie == "SONIC HEDGEHOG 2") {
	$SELECT = "SELECT id From sonic Where id = ?"; 
	$INSERT = "INSERT into sonic (Name, Address, Email, Phone, Schedule, Time, Movie, Cinema) 
	values(?, ?, ?, ?, ?, ?, ?, ?)";	
}
else if($Movie == "JURASSIC WORLD DOMINION") {
	$SELECT = "SELECT id From jurassic Where id = ?"; 
	$INSERT = "INSERT into jurassic (Name, Address, Email, Phone, Schedule, Time, Movie, Cinema) 
	values(?, ?, ?, ?, ?, ?, ?, ?)";	
}
else if($Movie == "BLACK ADAM") {
	$SELECT = "SELECT id From adam Where id = ?"; 
	$INSERT = "INSERT into adam (Name, Address, Email, Phone, Schedule, Time, Movie, Cinema) 
	values(?, ?, ?, ?, ?, ?, ?, ?)";	
}

//prepare statement for elect query

$stmt = $conn->prepare($SELECT);
$stmt -> bind_param("s", $Email);
$stmt->execute();
$stmt->bind_result($Email);
$stmt->store_result();
$rnum = $stmt->num_rows;

if($rnum == 0 ){
	$stmt->close();
	$stmt = $conn->prepare($INSERT);
	$stmt->bind_param("ssssssss", $Name, $Address, $Email, $Phone, $Schedule, $Time, $Movie, $Cinema);
	$stmt->execute();	
echo '<script>alert("Booking Request Successful.\nVisit profile and monitor your ticket/s for confirmation within 24 hours.")</script>';


}
else {
		echo "<div class='description-result'><p><b> Status: </b>Email already exists. Please use another email. </p></div>";

}

$stmt->close();
$conn->close();

?>
