<?php

$hostname = "localhost";
$db = "practice";
$Username = "root"; //default value
$Password = "";

$conn = new PDO("mysql:host=$hostname;dbname=$db", $Username, $Password);
if(isset($_POST['submit']))
{
    $country_name = $_POST['country_name'];
    $sql = $conn ->prepare("Insert Into practice_table (country_name) values(:country_name)");
    $conn->beginTransaction();
    $sql->execute(array(':country_name'=>$country_name));
    echo "<h2>Country added successfully</h2>";
    $conn->commit();
}
    $conn->null; 
?>

<!doctype html>
<html>
<head>

</head>
<body>
    <form action="practice.php" method="post">

<label for=""> Select Country</label>
<input name="country_name" id="country_name"
   type="text"
>
<input type="submit" name="submit" class="button" />

    </form>

</body>