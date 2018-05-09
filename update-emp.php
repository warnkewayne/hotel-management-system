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
// hotelManagement/update-emp.php
// Created: May 5th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 5th, 2018
// Edited by Wayne Warnke

//Staff table -- salary, position, name, username, password
//TODO:startsession();

require 'DB.php';


$db = new DB();

$salary = $_POST['salary'];
$position = $_POST['position'];
$name = $_POST['name'];
$username = $_POST['username'];
$pw = $_POST['password'];
$id //TODO: Need a way to get emp ID.....

$statement = $db->conn->prepare("UPDATE staff SET salary=?, position=?, name=?, username=?, password=? WHERE staff_id = $id");
  if(!$statement) die("Prepare failed: " . $db->conn->error);
$bind = $statement->bind_param("dssss", $salary, $position, $name, $username, $pw);
  if(!$bind) die("Bind failed: " . $statement->error);
$execute = $statement->execute();
  if(!$execute) die("Execute failed: " . $statement->error);


  if($execute)
  {
    //redirect back to view page
    header('Location: ');
  }
  else
  {
    die('Could not update employee: ' . $db->conn->error);
  }

 ?>
 </div>
 </body>
 </html>
