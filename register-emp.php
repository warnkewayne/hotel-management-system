<!doctype html>

<html lang="en">
  <head>
    <title>Check-In</title>
    <script src="change-background.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
    <div class="title-container">
      <h1>TCWS Hotels</h1>
    </div>
    <div class="background-container">
<?php
// hotelManagement/register-emp.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 4th, 2018
// Edited by Wayne Warnke
//
//
// This takesthe information posted by ?.php and will
// insert it into the DB. It creates an instance of the DB /**
// and uses SQL Injection safe functions to query it into the DB.
//
//

require 'DB.php';

$db = new DB();


$username = $_POST['username'];

$user = $db->conn->prepare("SELECT id FROM staff WHERE username=?");

        if(!$user) die("Prepare failed : " . $db->conn->error);

$bind = $user->bind_param("s", $username);

        if(!$bind) die("Bind failed: " . $user->error);

$execute = $user->execute();

        if(!$execute) die("Execute failed: " . $user->error);

$bResult = $user->bind_result($id);

$user->fetch();

///////////////////////////////////////////////////////////////////////

if(!$id)
{
  $user->free_result();

  //TODO: fill first partheseses with the column titles IN ORDER
  //TODO: fill values partheseses with ?s for every column in the table.
  $statement = $db->conn->prepare("INSERT INTO staff (salary, position, name, username) VALUES(?,?,?,?)");

  if(!$statement) die("Prepare failed: " . $db->conn->error);

  //TODO: new employee variables...

  $name = $_POST['name'];
  $salary = $_POST['salary'];
  $position = $_POST['position'];
  $username = $_POST['username'];
  $password = $_POST['pw'];
  $id = $_POST['id'];

$bind1 = $statement->bind_param()
//TODO: Bind param must be filled with the type of variables being
// put into the database i.e. first_name is a "s" (string).
// example - bind_param("sssss", $first_name, $last_name, $username....)

  if(!$bind1) die("Bind failed: " . $statement->error);

$execute1 = $statement->execute();

  if(!$execute1) die("Execute failed: " . $statement->error);


//Create Session
session_start();
$_SESSION['name'] = $name;
$_SESSION['username'] = $username;
$_SESSION['position'] = $position;
//TODO: etc......


header('Location: '); //TODO: redirect to employee home page
} else {
//if user exists return to ?.php
header('Location: ');
}
}

?>
</div>
<ul class="nav-bar">
  <li><a href="index.php">Home</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li><a href="check-in.php">Check In</a></li>
  <li><a href="check-out.php">Check Out</a></li>
  <li><a href="make-reservation.php">Make Reservation</a></li>
  <li><a href="emp-login.php">Employee Login</a></li>
</ul>
<div class="information-container">
  <h2>Comfort and Closeness at a Price You'll Love.</h2>
  <p>Discover a refresing hotel retreat in the heart of downtown Dunkirk, NY. With
  stylish accommodations and invigorating amenities, TWCS Hotel will make you free right
  at home during your stay.</p>
  <p>Well-appointed rooms and suites boast modern decor and perks including our iconic
    beds. Maintain your well-being at the fitness center, or explore Dunkirk on foot with
    our running program. If you're hosting an event in town, we offer flexible venues and
    comprehensive planning and catering services. Our hotel also provides eacy access to some
    of the city's top attractions. Whether you're traveling for business or pleasure, TWCS
    Hotel invites you to experience a revitalizing escape</p>
</div>
</body>
</html>
