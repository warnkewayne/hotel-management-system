<!doctype html>

<html lang="en">
  <head>
    <title>Check-In</title>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="change-background.js"></script>
    <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
    <div class="title-container">
      <h1>TCWS Hotels</h1>
    </div>
    <div class="background-container">
      <?php
// hotelManagement/delete-emp.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 4th, 2018
// Edited by Wayne Warnke
//
//
//

// Creates an instance of the class DB.
// prepares the query, binds it, and executes it (SQL Injection Safe)
// This deletes an employee specific to the ID that is given.
//
//
//TODO:startsession();

require 'db.php';

$db = new DB();

$deleteID = $_GET['id'];

$delete = $db->conn->prepare("DELETE FROM staff WHERE staff_id = ?");
  if(!$delete) die("Prepare failed: " . $db->conn->error);

$bind = $delete->bind_param("i", $deleteID);
  if(!$bind) die("Bind failed: " . $delete->error);

$execute = $delete->execute();
  if(!$execute) die("Execute failed: " . $delete->error);

if($execute == true) {
  session_destroy();
  $_SESSION = array();

$delete->free_result();

//TODO: Delete other things that was associated with this
// employee?
    header("Location: index.php");

  } else {
    echo "Could not delete user: " . $db->error;
  }?>
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
