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
  }





















 ?>
