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
// hotelManagement/emp-login.php
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
// This checks the credentials sent by the user from index.php
// This is locked from users that are not sent by index.php form
//
//
//
//

require 'DB.php';

$db = new DB();

$username = $_POST['username'];
$pw = $_POST['password'];

$user = $db->conn->prepare("SELECT name,password,staff_id FROM staff WHERE username=?");

  if(!$user) die("Prepare failed: " . $db->conn->error);

$bind = $user->bind_param("s", $username);

  if(!$bind) die("Bind failed: " . $db->conn->error);

$execute = $user->execute();

  if(!$execute) die("Execute failed: " . $db->conn->error);

$bResult = $user->bind_result($name, $password, $id);

$user->fetch();

if(isset($_POST['submit']) == false){
  header('Location: index.php?error=not_from_login');
  //redirects user to login.php with error query
  return;
}

if($username == false || $username == ''){
  header('Location: index.php?error=missing_username');
//redirects user to login.php with error Query
}

if($password == false || $password == '') {
  header('Location: index.php?error=missing_password');
  //redirects user to login.php with error Query
  return;
}


//see if credentials are valid
if($username!= ) { //TODO: equal to username variable from SQL QUERY
  header('Location: index.php?error=user_not_found');
  return;
}
if($password!= $pw) { //TODO: $pw must be matched with password from DB
  header('Location: index.php?error=wrong_password');
  return;
}

else {
  //Create a Session
  session_start();
  $_SESSION['username'] = $username;
  $_SESSION['name'] = $name;
  $_SESSION['role'] = 'staff'
  //TODO: Might need to send more Session variables
  //      depending on the DB structure.


  //TODO: Redirection to the role's homepage
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
