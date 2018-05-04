<?php
// hotelManagement/register-emp.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 4th, 2018
// Edited by Wayne Warnke
//
//
// This takesthe information posted by ?.php and will
// insert it into the DB. It creates an instance of the DB /**
// and uses SQL Injection safe functions to query it into the DB.
//
//

require 'DB.php';

$db = new DB();


$username = $_POST['username'];

$user = $db->conn->prepare("SELECT id FROM staff WHERE username=?");

        if(!$user) die("Prepare failed : " . $db->conn->error);

$bind = $user->bind_param("s", $username);

        if(!$bind) die("Bind failed: " . $user->error);

$execute = $user->execute();

        if(!$execute) die("Execute failed: " . $user->error);

$bResult = $user->bind_result($id);

$user->fetch();

///////////////////////////////////////////////////////////////////////

if(!$id)
{
  $user->free_result();

  //TODO: fill first partheseses with the column titles IN ORDER
  //TODO: fill values partheseses with ?s for every column in the table.
  $statement = $db->conn->prepare("INSERT INTO employees (salary, position, name, username) VALUES(?,?,?,?)");

  if(!$statement) die("Prepare failed: " . $db->conn->error);

  //TODO: new employee variables...

  $name = $_POST['name'];
  $salary = $_POST['salary'];
  $position = $_POST['position'];
  $username = $_POST['username'];
  $password = $_POST['pw'];
  $id = $_POST['id'];

$bind1 = $statement->bind_param()
//TODO: Bind param must be filled with the type of variables being
// put into the database i.e. first_name is a "s" (string).
// example - bind_param("sssss", $first_name, $last_name, $username....)

  if(!$bind1) die("Bind failed: " . $statement->error);

$execute1 = $statement->execute();

  if(!$execute1) die("Execute failed: " . $statement->error);


//Create Session
session_start();
$_SESSION['name'] = $name;
$_SESSION['username'] = $username;
$_SESSION['position'] = $position;
//TODO: etc......


header('Location: '); //TODO: redirect to employee home page
} else {
//if user exists return to ?.php
header('Location: ');
}
}




























 ?>
