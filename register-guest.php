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
// hotelManagement/register-guest.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 6th, 2018
// Edited by Caleb Sarikey
//
//
// This takesthe information posted by signup.php and will
// insert it into the DB. It creates an instance of the DB /**
// and uses SQL Injection safe functions to query it into the DB.
//
//
//
//

require 'DB.php';
$db = new DB();

$username = $_POST['username'];

$user = $db->conn->prepare("SELECT guest_id FROM GUEST WHERE username=?");

        if(!$user) die("Prepare failed : " . $db->conn->error);

$bind = $user->bind_param("s", $username);

        if(!$bind) die("Bind failed: " . $user->error);

$execute = $user->execute();

        if(!$execute) die("Execute failed: " . $user->error);

$bResult = $user->bind_result($id);

$user->fetch();

///////////////////////////////////////////////////////////////

//Check if User Exists

    if(!$id) {
      $user->free_result();

      //filled first partheseses with the column titles in order
      //filled values partheseses with ?s for every column in the table
      //  -Caleb
      $statement = $db->conn->prepare("INSERT INTO GUEST (first_name, last_name, username, password)
                                      VALUES(?,?,?,?)");

        if(!$statement) die("Prepare failed: " . $db->conn->error);

        //new guest variables...
        //  -Caleb
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];

      $bind1 = $statement->bind_param("ssss", $first_name, $last_name, $username, $password);
      //Bind param filled
      //  -Caleb

        if(!$bind1) die("Bind failed: " . $statement->error);

      $execute1 = $statement->execute();

        if(!$execute1) die("Execute failed: " . $statement->error);


      //Create Session
      session_start();
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;
      //$_SESSION['guestID'] = $id;
      //TODO: etc......


      header('Location: '); //TODO: redirect to guest home page
    } else {
      //if user exists return to signup.php
      header('Location: signup.php?error=user_already_exists');
    }


?>
</div>
</body>
</html>
