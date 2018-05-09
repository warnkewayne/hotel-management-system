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
</body>
</html>
