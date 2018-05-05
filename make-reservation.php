<?php

// hotelManagement/make-reservation.php
// Created: May 5th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 5th, 2018
// Edited by Wayne Warnke
//
//
//
//
//
//
//

require 'DB.php';

$db = new DB();

$roomID = $_POST['roomNumber'];
$guestID = $_SESSION['guest_id'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];

$statement = $db->conn->prepare("INSERT INTO reserve (guest_id, room_id, res_start, res_end) VALUES(?,?,?,?)");
  if(!$statement) die("Prepare failed: " . $db->conn->error);

$bind = $statement->bind_param("iiss", $guestID, $roomID, $startDate, $endDate); //TODO: dates are string??
  if(!$bind) die("Bind failed: " . $statement->error);

$execute = $statement->execute();
  if($execute) die("Execute failed: " . $statement->error);

//Redirect back to view page


 ?>
