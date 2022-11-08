<!--

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTG-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin1.css">
    <script src="admin.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet' type='text/css'>

    <link rel="shortcut icon" type="image/png" href="sd.png" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title> Admin| Home </title>
    
    <style>
        
    </style>
</head>

<body>
    <nav>

        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <img style=" height: 50px;" src="lgoo.png" alt="logo" id="logo">

        </div>

     

       
        <label for="nav-toggle" class="icon-burger"> <!--this will stand as click on nav-toggle, these are the three lines-->
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>

        <!-- Change Theme: this is connected to root in css and index.js -->
<div id="toggle-container" class="toggle-container">
    <button style="margin-top: 5px;" class="theme-btn light" onclick="setTheme('light'); PictureChangeLight();" title="Light mode">
        <img src="brightness.png" alt="">
    </button>
    <button class="theme-btn dark" onclick="setTheme('dark'); PictureChangeDark();" title="Dark mode">
        <img src="night-mode.png" alt="">
    </button>
  </div>
        
    </nav>


    <br><br><br><br><br>

<!-- BOOKING LISTS -->
<div class="main-container">

    <div class="all-cinema-locations-container">
        <p> ADMIN PAGE</p>
        <hr id="line-header">
    </div>

    
    <div class="pages">
        <button class="page" onclick="currentSlide(1)"  id="current_page">BOOKING LIST</button>
        <button class="page" onclick="currentSlide(2)">APPROVE REQUEST</button>
        <button class="page" onclick="currentSlide(3)">DECLINE REQUEST</button>
        <button class="page" onclick="currentSlide(4)"> DELETE REQUEST</button>
        <button style="background-color: #970909; color: white;" class="page" type="submit" onClick="refreshPage()">
        REFRESH PAGE</button>
        <script>
            function refreshPage(){
                window.location.reload();
            } 
            </script>


    </div>


<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "booking";

$conn = mysqli_connect("localhost", "root", "", "booking");
if($conn->connect_error) {
    die("Connection failed:". $conn->connect_error);
}


//FOR AVATAR 2
echo '<div class="table-wrapper">
    <tr><td colspan="100%"><p style="padding:10px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-bottom:none;"><b>AVATAR: WAY OF WATER </b></p></td></tr>
    <table  class="fl-table" > 
    <thead>
    <tr>
        <th >ID</th> 
        <th >NAME</th>
        <th>ADDRESS</th>
        <th >EMAIL</th>
        <th>SCHEDULE</th>
        <th>TIME</th>
        <th>CINEMA</th>
        <th>AMOUNT</th>
        <th>DATE SUBMITTED</th>
        <th>PAYMENT STATUS</th>
        <th>Contact Number</th>
        <th>Booking Status</th>
        <th>Seat Number</th>
    
    </tr> </thead>';
    echo "<tbody>";

$sql_avatar = "SELECT * from avatar";
$result_avatar = $conn->query($sql_avatar);

if($result_avatar->num_rows > 0){
    while ($row = $result_avatar->fetch_assoc()){
        echo 
        
        "<tr><td>". $row["id"]. "</td><td>". $row["Name"]. "</td><td>".
        $row["Address"]. "</td><td>". $row["Email"]. "</td><td>". $row["Schedule"]. 
        "</td><td>". $row["Time"]. "</td><td>". 
        $row["Cinema"]. "</td><td>". $row["Amount"]. "</td><td>". $row["Date_submitted"].
        "</td><td>". $row["Payment_Status"]."</td><td>". $row["Phone"]. 
        "</td><td>". $row["Booking_status"]. "</td><td>". $row["Seat_no"]. "</td></tr>".
        "<tr><td colspan='100%' id='td'></td></tr>";
        
    }
 
    echo "</tbody></table>
    </div>
    ";
}
    else{
        echo "0 result";
    }

    // FOR SONIC HEDGEHOG 2
    echo '<div class="table-wrapper">
    <tr><td colspan="100%"><p style="padding:10px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-bottom:none;"><b> SONIC HEDGEHOG 2</b></p></td></tr>
    <table  class="fl-table" > 
    <thead>
    <tr>
        <th >ID</th> 
        <th >NAME</th>
        <th>ADDRESS</th>
        <th >EMAIL</th>
        <th>SCHEDULE</th>
        <th>TIME</th>
        <th>CINEMA</th>
        <th>AMOUNT</th>
        <th>DATE SUBMITTED</th>
        <th>PAYMENT STATUS</th>
        <th>Contact Number</th>
        <th>Booking Status</th>
        <th>Seat Number</th>
    
    </tr> </thead>';
    echo "<tbody>";

    
$sql_sonic = "SELECT * from sonic";
$result_sonic = $conn->query($sql_sonic);

if($result_sonic->num_rows > 0){
    while ($row = $result_sonic->fetch_assoc()){
        echo 
        "<tr><td>". $row["id"]. "</td><td>". $row["Name"]. "</td><td>".
        $row["Address"]. "</td><td>". $row["Email"]. "</td><td>". $row["Schedule"]. 
        "</td><td>". $row["Time"].  "</td><td>". 
        $row["Cinema"]. "</td><td>". $row["Amount"]. "</td><td>". $row["Date_submitted"].
        "</td><td>". $row["Payment_Status"]."</td><td>". $row["Phone"]. 
        "</td><td>". $row["Booking_status"]. "</td><td>". $row["Seat_no"]. "</td></tr>".
        "<tr><td colspan='100%' id='td'></td></tr>";

    }
 
    echo "</tbody></table>
    </div>
    ";
}
    else{
        echo "0 result";
    }


//FOR JURASSIC WORLD DOMINION
echo '<div class="table-wrapper">
<tr><td colspan="100%"><p style="padding:10px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
border-bottom:none;"><b>JURASSIC WORLD DOMINION </b></p></td></tr>
<table  class="fl-table" > 
<thead>
<tr>
    <th>ID</th> 
    <th>NAME</th>
    <th>ADDRESS</th>
    <th>EMAIL</th>
    <th>SCHEDULE</th>
    <th>TIME</th>
    <th>CINEMA</th>
    <th>AMOUNT</th>
    <th>DATE SUBMITTED</th>
    <th>PAYMENT STATUS</th>
    <th>Contact Number</th>
    <th>Booking Status</th>
    <th>Seat Number</th>

</tr> </thead>';

echo "<tbody>";


$sql_jurassic = "SELECT * from jurassic";
$result_jurassic = $conn->query($sql_jurassic);

if($result_jurassic->num_rows > 0){
    while ($row = $result_jurassic->fetch_assoc()){
        echo 
        "<tr><td>". $row["id"]. "</td><td>". $row["Name"]. "</td><td>".
        $row["Address"]. "</td><td>". $row["Email"]. "</td><td>". $row["Schedule"]. 
        "</td><td>". $row["Time"]. "</td><td>". 
        $row["Cinema"]. "</td><td>". $row["Amount"]. "</td><td>". $row["Date_submitted"].
        "</td><td>". $row["Payment_Status"]."</td><td>". $row["Phone"]. 
        "</td><td>". $row["Booking_status"]. "</td><td>". $row["Seat_no"]. "</td></tr>".
        "<tr><td colspan='100%' id='td'></td></tr>";

    }
 
    echo "</tbody></table>
    </div>
    ";
}
    else{
        echo "0 result";
    }



//FOR BLACK ADAM
echo '<div class="table-wrapper">
<tr><td colspan="100%"><p style="padding:10px;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
border-bottom:none;"><b>BLACK ADAM </b></p></td></tr>
<table  class="fl-table" > 
<thead>
<tr>
    <th >ID</th> 
    <th >NAME</th>
    <th>ADDRESS</th>
    <th >EMAIL</th>
    <th>SCHEDULE</th>
    <th>TIME</th>
    <th>CINEMA</th>
    <th>AMOUNT</th>
    <th>DATE SUBMITTED</th>
    <th>PAYMENT STATUS</th>
    <th>Contact Number</th>
    <th>Booking Status</th>
    <th>Seat Number</th>

</tr> </thead>';

$sql_adam = "SELECT * from adam";
$result_adam = $conn->query($sql_adam);

if($result_adam->num_rows > 0){
    while ($row = $result_adam->fetch_assoc()){
        echo 
        "<tr><td>". $row["id"]. "</td><td>". $row["Name"]. "</td><td>".
        $row["Address"]. "</td><td>". $row["Email"]. "</td><td>". $row["Schedule"]. 
        "</td><td>". $row["Time"]. "</td><td>". 
        $row["Cinema"]. "</td><td>". $row["Amount"]. "</td><td>". $row["Date_submitted"].
        "</td><td>". $row["Payment_Status"]."</td><td>". $row["Phone"]. 
        "</td><td>". $row["Booking_status"]. "</td><td>". $row["Seat_no"]. "</td></tr>".
        "<tr><td colspan='100%' id='td'></td></tr>";

    }
 
    echo "</tbody></table>    </div>
    ";
}
    else{
        echo "0 result";
    }

    $conn->close();
?>

</div>


<!-- APPROVE REQUEST-->
<div class="main-container">

<div class="all-cinema-locations-container">
        <p> ADMIN PAGE </p>
        <hr id="line-header">
    </div>

    
    <div class="pages">
        <button class="page" onclick="currentSlide(1)">BOOKING LIST</button>
        <button class="page" onclick="currentSlide(2)" id="current_page">APPROVE REQUEST</button>
        <button class="page" onclick="currentSlide(3)">DECLINE REQUEST</button>
        <button class="page" onclick="currentSlide(4)"> DELETE REQUEST</button>


        </div>
   
        
        <form class="form-approved-container" method="POST">

        <div class="form-logo">
            <img src="lgoo.png" alt="">
        </div>

        <div class="form-group">
        <p style="font-size: 15px; text-align: left; padding:10px; padding-top: 20px;"> MOVIE DATABASE:</p>

            <select id="Movie_input" name="Movie_approved">
                <option value="AVATAR: WAY OF WATER">AVATAR: WAY OF WATER</option>
                <option value="SONIC HEDGEHOG 2">SONIC HEDGEHOG 2</option>
                <option value="JURASSIC WORLD DOMINION"> JURASSIC WORLD DOMINION</option>
                <option value="BLACK ADAM">BLACK ADAM</option>
                </select>
          </div>

        <div class="form-group">
        <p style="font-size: 15px; text-align: left; padding:10px;"> ID NUMBER:</p>
            <input
              required
              type="text"
              class="form-control"
              id="id"
              name="id_approved"
            />
          </div>

          <div class="form-group">
          <p style="font-size: 15px; text-align: left; padding:10px;">ASSIGN SEAT NUMBER:</p>
            <input
              required
              type="text"
              class="form-control"
              id="Seat_no"
              name="Seat_no_approved"
            />
          </div>

          <div class="form-group">

          <input class="update" type="submit" name="update" value="APPROVE  "/> </div>

        </form>
</div>

<?php

$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'booking');

if(isset($_POST['update']))
{
    echo "<script> alert('MOVIE REQUEST APPROVED!')</script>";

    $Movie_approved = $_POST['Movie_approved'];

    if($Movie_approved == "AVATAR: WAY OF WATER"){

    $id_approved = $_POST['id_approved'];
    $Seat_no_approved = $_POST['Seat_no_approved'];

    $query = "UPDATE avatar SET Booking_status='APPROVED', Seat_no = '$_POST[Seat_no_approved]'  WHERE id = '$_POST[id_approved]' ";
    $query_run = mysqli_query($connection, $query);

    }

    else if($Movie_approved == "SONIC HEDGEHOG 2"){
        $id_approved = $_POST['id_approved'];
        $Seat_no_approved = $_POST['Seat_no_approved'];

        $query = "UPDATE sonic SET Booking_status='APPROVED', Seat_no = '$_POST[Seat_no_approved]' WHERE id = '$_POST[id_approved]' ";
        $query_run = mysqli_query($connection, $query);
    
        }
     else if($Movie_approved == "JURASSIC WORLD DOMINION"){
        $id_approved = $_POST['id_approved'];
        $Seat_no_approved = $_POST['Seat_no_approved'];
    
        $query = "UPDATE jurassic SET Booking_status='APPROVED',  Seat_no = '$_POST[Seat_no_approved]' WHERE id = '$_POST[id_approved]' ";
        $query_run = mysqli_query($connection, $query);
        
    }
    else if($Movie_approved == "BLACK ADAM"){
        $id_approved = $_POST['id_approved'];
        $Seat_no_approved = $_POST['Seat_no_approved'];
    
        $query = "UPDATE adam SET Booking_status='APPROVED',  Seat_no = '$_POST[Seat_no_approved]' WHERE id = '$_POST[id_approved]' ";
        $query_run = mysqli_query($connection, $query);
    }
}
?>


<!-- DECLINE REQUEST-->
<div class="main-container">

<div class="all-cinema-locations-container">
        <p> ADMIN PAGE</p>
        <hr id="line-header">
    </div>

    
    <div class="pages">
        <button class="page" onclick="currentSlide(1)">BOOKING LIST</button>
        <button class="page" onclick="currentSlide(2)">APPROVE REQUEST</button>
        <button class="page" onclick="currentSlide(3)" id="current_page">DECLINE REQUEST</button>
        <button class="page" onclick="currentSlide(4)"> DELETE REQUEST</button>


        </div>

        <form method="POST" class="form-decline-container">
        <div class="form-logo">
            <img src="lgoo.png" alt="">
        </div>
        <div class="form-group">
        <p style="font-size: 15px; text-align: left; padding:10px; padding-top: 20px;">MOVIE DATABASE:</p>
            <select id="Movie_input" name="Movie_declined">
                <option value="AVATAR: WAY OF WATER">AVATAR: WAY OF WATER</option>
                <option value="SONIC HEDGEHOG 2">SONIC HEDGEHOG 2</option>
                <option value="JURASSIC WORLD DOMINION"> JURASSIC WORLD DOMINION</option>
                <option value="BLACK ADAM">BLACK ADAM</option>
                </select>
          </div>

        <div class="form-group">
        <p style="font-size: 15px; text-align: left; padding:10px;"> ID NUMBER:</p>
            <input
              required
              type="text"
              class="form-control"
              id="id"
              name="id_declined"
            />
          </div>

        
          <div class="form-group">

          <input class="update" type="submit" name="update_decline" value="DECLINE"/> </div>

        </form>
</div>

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'booking');

if(isset($_POST['update_decline']))
{
    echo "<script> alert('MOVIE REQUEST DECLINED!')</script>";

    $Movie_declined = $_POST['Movie_declined'];

    if($Movie_declined == "AVATAR: WAY OF WATER"){

    $id_declined = $_POST['id_declined'];

    $query = "UPDATE avatar SET Booking_status='DECLINED', Seat_no = '----'  WHERE id = '$_POST[id_declined]' ";
    $query_run = mysqli_query($connection, $query);

    }

    else if($Movie_declined == "SONIC HEDGEHOG 2"){

        $id_declined = $_POST['id_declined'];

        $query = "UPDATE sonic SET Booking_status='DECLINED', Seat_no = '----'  WHERE id = '$_POST[id_declined]' ";
        $query_run = mysqli_query($connection, $query);
    
        }
     else if($Movie_declined == "JURASSIC WORLD DOMINION"){
        $id_declined = $_POST['id_declined'];

        $query = "UPDATE jurassic SET Booking_status='DECLINED', Seat_no = '----'  WHERE id = '$_POST[id_declined]' ";
        $query_run = mysqli_query($connection, $query);
        
    }
    else if($Movie_declined == "BLACK ADAM"){
        $id_declined = $_POST['id_declined'];

    $query = "UPDATE adam SET Booking_status='DECLINED', Seat_no = '----'  WHERE id = '$_POST[id_declined]' ";
    $query_run = mysqli_query($connection, $query);
    }
}
?>



<!-- DELETE REQUEST-->
<div class="main-container">

<div class="all-cinema-locations-container">
        <p> ADMIN PAGE</p>
        <hr id="line-header">
    </div>

    
    <div class="pages">
        <button class="page" onclick="currentSlide(1)">BOOKING LIST</button>
        <button class="page" onclick="currentSlide(2)">APPROVE REQUEST</button>
        <button class="page" onclick="currentSlide(3)">DECLINE REQUEST</button>
        <button class="page" onclick="currentSlide(4)" id="current_page">DELETE REQUEST</button>
        </div>

        <form method="POST" class="form-delete-container">
        <div class="form-logo">
            <img src="lgoo.png" alt="">
        </div>

        <div class="form-group">
        <p style="font-size: 15px; text-align: left; padding:10px;"> MOVIE DATABASE:</p>
            <select id="Movie_input" name="Movie_delete">
                <option value="AVATAR: WAY OF WATER">AVATAR: WAY OF WATER</option>
                <option value="SONIC HEDGEHOG 2">SONIC HEDGEHOG 2</option>
                <option value="JURASSIC WORLD DOMINION"> JURASSIC WORLD DOMINION</option>
                <option value="BLACK ADAM">BLACK ADAM</option>
                </select>
          </div>

        <div class="form-group">
        <p style="font-size: 15px; text-align: left; padding:10px;"> ID NUMBER:</p>
            <input
              required
              type="text"
              class="form-control"
              id="id"
              name="id_delete"
            />
          </div>

        
          <div class="form-group">

          <input class="update" type="submit"  name="delete" value="DELETE"/> </div>
          
         
        </form>
</div>

<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'booking');

if(isset($_POST['delete']))
{
    echo "<script> alert('MOVIE REQUEST DELETED!')</script>";

    $Movie_delete = $_POST['Movie_delete'];

    if($Movie_delete == "AVATAR: WAY OF WATER"){

    $id_delete = $_POST['id_delete'];

    $query = "DELETE FROM avatar WHERE id = '$_POST[id_delete]'; ";
    $query_run = mysqli_query($connection, $query);

    }

    else if($Movie_delete == "SONIC HEDGEHOG 2"){

        $id_delete = $_POST['id_delete'];

        $query = "DELETE FROM sonic WHERE id = '$_POST[id_delete]'; ";
        $query_run = mysqli_query($connection, $query);
    
        }

     else if($Movie_delete == "JURASSIC WORLD DOMINION"){
        $id_delete = $_POST['id_delete'];

        $query = "DELETE FROM jurassic WHERE id = '$_POST[id_delete]'; ";
        $query_run = mysqli_query($connection, $query);
        
    }
    else if($Movie_delete == "BLACK ADAM"){
        $id_delete = $_POST['id_delete'];

        $query = "DELETE FROM adam WHERE id = '$_POST[id_delete]'; ";
        $query_run = mysqli_query($connection, $query);
    }
}
?>





<!--
JS script for showing slides.    
-->

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
    var slides = document.getElementsByClassName("main-container");
    var dots = document.getElementsByClassName("page");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
</script>


    <div  style="width: 100%; height: 300px; background-color: #970909; margin-top: 0px;">
    </div>
    </body>
    </html>