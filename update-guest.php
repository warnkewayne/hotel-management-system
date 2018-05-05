<?php
// hotelManagement/update-emp.php
// Created: May 5th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 5th, 2018
// Edited by Wayne Warnke


//Guest table -- first_name, last_name, ccid, guest_id, username, password

//TODO:startsession();


require 'DB.php';

$db = new DB();

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$guestID = $_SESSION['guest_id'];

$statement = $db->conn->prepare("UPDATE guest SET first_name=?, last_name=?,username=?,password=? WHERE guest_id = $guestID");
  if(!$statement) die("Prepare failed: " . $db->conn->error);
$bind = $statement->bind_param("ssss", $firstName, $lastName, $username, $password);
  if(!$bind) die("Prepare failed: " . $statement->conn->error);
$execute = $statement->execute();
  if(!$execute) die("Execute failed: " . $statement->error);

if($execute)
{
  //redirect back to view page
  header('Location: ');
}
else
{
  die('Could not update guest: ' . $db->conn->error);
}


 ?>
