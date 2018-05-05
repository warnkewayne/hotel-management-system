<?php
// hotelManagement/update-housekeep.php
// Created: May 5th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 5th, 2018
// Edited by Wayne Warnke

//Clean table -- room_id, staff_id, housekeeping_time
//TODO:startsession();

require 'DB.php';


$db = new DB();

$roomID = $_POST['room_id'];
$staffID = $_POST['staff_id'];
$timestamp = $_POST['time'];

$statement = $db->conn->prepare("UPDATE clean SET room_id=?, staff_id=?, housekeeping_time=? WHERE ");
  if(!$statement) die("Prepare failed: " . $db->conn->error);
$bind = $statement->bind_param("iis", $roomID, $staffID, $timestamp);
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
    die('Could not update housekeeping record: ' . $db->conn->error);
  }



 ?>
