<?php
// hotelManagement/update-reservation.php
// Created: May 5th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 5th, 2018
// Edited by Wayne Warnke

//Reserve table --guest_id, room_id, res_start, res_end

//TODO:startsession();

$db = new DB();

//TODO: get guest id by select statement
$roomID = $_POST['room_id'];
$startDate = $_POST['start_date'];
$endDate = $_POST['end_date'];

$statement = $db->conn->prepare("UPDATE reserve SET room_id=?, res_start=?, res_end=? WHERE "); //TODO: Where statement needs to be reservation id
  if(!$statement) die("Prepare failed: " . $db->conn->error);
$bind = $statement->bind_param("iss", $roomID, $startDate, $endDate);
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
    die('Could not update Reservation: ' . $db->conn->error);
  }

 ?>
